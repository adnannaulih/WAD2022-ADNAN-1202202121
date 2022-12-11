<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request)
    {
        if ($request->password == $request->konfirmasi) {
            User::create([
                'email' => $request->email,
                'name' => $request->nama,
                'no_hp' => $request->no_hp,
                'password' => bcrypt($request->password),
            ]);
            return redirect('/login');
        } else {
            return redirect('/register');
        }
        
    }
    public function auth(Request $request)
    {
        $auth = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        if (!$auth) {
            return redirect('/login');
        } else {
            $request->session()->regenerate();
            return redirect()->intended('/');
        };
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function register()
    {
        return view('register-adnan');
    }

    public function login()
    {
        return view('login-adnan');
    }
}
