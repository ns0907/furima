<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * 認証の試行を処理
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();

            // return redirect()->intended('dashboard');
            return ['result'=> '1', "message"=> "ログインしました。"];
        } else {
            return [
                'result'=> '0', 
                "message"=> "メールアドレスまたはパスワードが一致していません。",
                "errors"=> [
                ]
            ];
        }

        return back()->withErrors([
            'email' => 'The provided credentials do n ot match our records.',
        ])->onlyInput('email');
    }
}