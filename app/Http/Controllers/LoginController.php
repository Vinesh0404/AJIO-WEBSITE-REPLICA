<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'user_type' => 'required|string|in:customer,admin',
        ]);

        $credentials = $request->only('email', 'password','user_type');

        if (Auth::attempt($credentials)) {
            if ($request->user_type == 'admin') {
                return redirect()->route('admindashboard');
            } else {
                return redirect()->route('home');
            }
        }

       
    return redirect()->back()->with('success', 'invalid information .');
    }

}