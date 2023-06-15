<?php

namespace App\Http\Controllers;

use App\Models\Password_Reset;
use Illuminate\Http\Request;
use hash;
use Carbon\Carbon; 

use Illuminate\Support\Str;

use DB;
use Mail;
class ForgotPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showForgetPasswordForm()
    {
        return view('auth.forgot-password');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function submitForgetPasswordForm(Request $request)
    {
        // dd($request->email);
        $request->validate([
            'email'=>'required|email|exists:users'
        ]);//verificando se o emaill existe e se é válido

        $token=Str::random(64);

        DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
        ]);
        
        Mail::send('auth.mail.forgetPasswordLink', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });
        
        return back()->with('message', 'Uma mensagem para contendo o link de reset foi enviada para este email');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Password_Reset  $password_Reset
     * @return \Illuminate\Http\Response
     */
    public function showResetPasswordForm()
    {
        return view('auth.mail.forgetPasswordLink');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);
        
        $updatePassword = DB::table('password_resets')
                            ->where([
                              'email' => $request->email, 
                              'token' => $request->token
                            ])
                            ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return redirect('/login')->with('message', 'Your password has been changed!');
    }
}
