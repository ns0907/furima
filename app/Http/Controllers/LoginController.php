<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    /**
     * 認証の試行を処理
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();

            // return redirect()->intended('dashboard');
            return ['result'=> 1, "message"=> "ログインしました。"];
        } else {
            return [
                'result'=> 0, 
                "message"=> "メールアドレスまたはパスワードが一致していません。",
                "errors"=> [
                ]
            ];
        }

        return back()->withErrors([
            'email' => 'The provided credentials do n ot match our records.',
        ])->onlyInput('email');
    }

    /**
     * ログアウト
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return response()->json(true);
    }
}