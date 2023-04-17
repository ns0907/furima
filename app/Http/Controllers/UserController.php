<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserCreateRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\UserCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        $user->nickname = $request->input('nickname');
        $user->introduction = $request->input('introduction');
        return $user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
