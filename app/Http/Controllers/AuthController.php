<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Slider;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/admin/dashboard');
        }

        $about = About::first();
        $sliders = Slider::all();
        return view('auth.login', compact('about', 'sliders'));
    }

    public function authenticated(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }

        return back()->withErrors([
            'loginError' => 'Email atau password salah'
        ]);
    }

    public function __invoke(Request $request)
    {
        Auth::logout();

        return redirect('/admin');
    }
}
