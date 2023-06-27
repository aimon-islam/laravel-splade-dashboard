<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        // $credentials = [
        //     "email" => $request->input("credential"),
        //     "password" => $request->input("password")
        // ];

        // if (Auth::attempt($credentials)) {
        //     dd("hello");
        // } else {
        //     dd("hii");
        // }
    
    }
}
