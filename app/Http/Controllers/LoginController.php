<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Log;

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
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;
            Log::info('Generated token: ' . $token);

            return ['result' => 1, 'message' => 'ログインしました。', 'token' => $token];
        } else {
            return [
                'result'=> 0, 
                "message"=> "メールアドレスまたはパスワードが一致していません。",
                "errors"=> [
                ]
            ];
        }
    }

    /**
     * ログアウト
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            $user->tokens()->where('name', 'auth_token')->delete();
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }
}