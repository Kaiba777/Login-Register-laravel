<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function storeRegister(RegisterRequest $request) {
        User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'confirm' => $request->input('confirm')
        ]);
        return redirect()->route('login')->with('success', "Votre compte a bien été créer");
    }

    public function storeLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['email'],
            'password' => ['min:1'],
            'confirm' => ['boolean']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended(route('dashboard'));
        }
        return to_route('login');
    }

    public function dashboard() {
        return view('dashboard');
    }

    public function logout() {
        Auth::logout();
        return to_route('login');
    }
}
