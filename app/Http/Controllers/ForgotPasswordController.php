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

        Mail::send('auth.mail.forgetPasswordPage', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'Uma mensagem para contendo o link de reset foi enviada para este email');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Password_Reset  $password_Reset
     * @return \Illuminate\Http\Response
     */
    public function show(Password_Reset $password_Reset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Password_Reset  $password_Reset
     * @return \Illuminate\Http\Response
     */
    public function edit(Password_Reset $password_Reset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Password_Reset  $password_Reset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Password_Reset $password_Reset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Password_Reset  $password_Reset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Password_Reset $password_Reset)
    {
        //
    }
}
