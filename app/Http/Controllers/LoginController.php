<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:2|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email:dns|unique:users',
            'username' => 'required|unique:users|min:3|max:255|regex:/^[a-zA-Z0-9]+$/',
            'password' => 'required|min:5|max:255',
            'role' => 'required',
        ]);

        User::create($validatedData);

        $validatedData['password'] = Hash::make($validatedData['password']);

        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|min:3|max:255',
            'password' => 'required|min:5|max:255',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $role = $user->role;
            switch ($role) {
                case 'admin':
                    return redirect()->intended('/dashboard');
                case 'user':
                    return redirect()->intended('/');
                default:
                    Auth::logout();
                    return back()->with('error', 'Peran tidak dikenali!');
            }
        }

        return back()->with(['error' => 'Login failed, please try again',]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}