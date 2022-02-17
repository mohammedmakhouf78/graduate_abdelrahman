<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('admin.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['email','password']);
        if(Auth::attempt($credentials))
        {
            return redirect(route('home'));
        }
        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();

        return redirect(route('admin.loginPage'));
    }
}
