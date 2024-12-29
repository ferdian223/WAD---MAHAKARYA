<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Bcrypt;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            \DB::table('login_logs')->insert([
                'user_id' => Auth::id(),
                'login_time' => now(),
                'ip_address' => $request->ip(),
            ]);

            return redirect()->intended('index');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah',
        ]);
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        try {
            // Tambahkan ini untuk debugging
            // dd($request->all());

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'username' => 'required|string|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);

            return redirect()->route('login')
                ->with('success', 'Registrasi berhasil! Silakan login.');

        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())
                ->withInput();
        }
    }
}