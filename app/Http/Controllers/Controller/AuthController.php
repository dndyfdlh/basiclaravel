<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil, arahkan ke halaman tertentu
            return redirect()->route('dashboard');
        } else {
            // Jika otentikasi gagal, kembali ke halaman masuk dengan pesan error
            return back()->withErrors('Login failed. Please check your credentials.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

