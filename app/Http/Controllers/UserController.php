<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserCreateRequest;

class UserController extends Controller
{
    /**
     * ユーザ登録
     *
     * @param  App\Http\Requests\UserCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function regist(UserCreateRequest $request)
    {
        // DBインサート
        $user = new User([
            'name' => 1,
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // 作成
        if ($user->save()) {
            return ['result' => 1, "message" => "会員登録しました。"];
        } else {
            return [
                'result' => 0,
                "message" => "会員登録に失敗しました",
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
