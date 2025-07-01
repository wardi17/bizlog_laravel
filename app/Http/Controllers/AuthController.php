<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $verificationLink = route('verify.email', ['token' => $user->id]);

        Mail::to($user->email)->send(new \App\Mail\VerifyEmail($verificationLink));

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan cek email Anda untuk verifikasi.');
    }

    public function verifyEmail($token)
    {
        $user = User::findOrFail($token);

        $user->update(['email_verified_at' => now()]);

        return redirect()->route('login')->with('success', 'Email Anda telah diverifikasi!');
    }
    
// batas untuk registasi   email dan daftar user
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
          //  return redirect()->intended('home');
            return redirect()->intended('/appdashboard');
        }

        return redirect()->back()->withErrors([
            'login' => 'Login gagal, periksa kembali username atau password.',
        ])->withInput();
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome')->with('success', 'Anda telah logout.');
    }

}
