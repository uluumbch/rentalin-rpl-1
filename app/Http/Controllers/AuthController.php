<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $login = Auth::attempt([
            'email' => $email,
            'password' => $password,
        ]);

        if ($login == true) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        } else {
            return back()->withErrors([
                'login' => 'Maaf, email atau password salah',
            ]);
        }
    }
}
