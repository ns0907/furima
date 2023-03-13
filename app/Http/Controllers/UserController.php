<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * ユーザ登録
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function regist(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // DBインサート
        $user = new User([
            'name' => 1,
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // 作成
        if ($user->save()) {
            return ['result' => '1', "message" => "会員登録しました。"];
        } else {
            return [
                "message" => "会員登録失敗",
                "errors" => [
                    "email" => [
                        "会員登録失敗"
                    ]
                ]
            ];
        }

        return back()->withErrors([
            'email' => 'The provided credentials do n ot match our records.',
        ])->onlyInput('email');
    }
}
