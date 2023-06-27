<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        if (auth()->check()) redirect("/");
    }

    public function __invoke(LoginRequest $request)
    {
        $credentials = [
            "email" => $request->input("credential"),
            "password" => $request->input("password")
        ];

        if (Auth::attempt($credentials)) {
        } else {
        }
    }
}
