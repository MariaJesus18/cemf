<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\User;
class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            '_token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
     
        $user = \DB::table('users')->where('email','like','%'.$request->email.'%')->get();    
        foreach($user as $userinfo){
            $id=$userinfo->id;
        }
        
        $user = User::find($id);

        $user->forceFill([
            'password' => Hash::make($request->password)
        ])->setRememberToken(Str::random(60));

        $user->save();

        event(new PasswordReset($user));
 
        return redirect(url('login'));

        // dd($user->email);

        // dd($request->only('email', 'password', 'password_confirmation', '_token'));

        // if(){

        // }

        // $status = Password::reset(
        //     $request->only('email', 'password', 'password_confirmation', '_token'),


        //     function (User $user, string $password) {
        //         $user->forceFill([
        //             'password' => Hash::make($password)
        //         ])->setRememberToken(Str::random(60));
     
        //         $user->save();
     
        //         event(new PasswordReset($user));
        //     }
        // );
     
        // return $status === Password::PASSWORD_RESET
        //             ? redirect()->route('login')->with('status', __($status))
        //             : back()->withErrors(['email' => [__($status)]]);

    }
}
