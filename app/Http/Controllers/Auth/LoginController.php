<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\Facades\Toast;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        $credentials = [
            filter_var($request->input("credential"), FILTER_VALIDATE_EMAIL) ? "email" : "phone" => $request->input("credential"),
            "password" => $request->input("password")
        ];

        if (Auth::attempt($credentials)) {
            Toast::success("Authentication successful!")->autoDismiss();
            return redirect()->route("home");
        } else {
            return Toast::danger("Incorrect credentials!")->autoDismiss();
        }
    }
}
