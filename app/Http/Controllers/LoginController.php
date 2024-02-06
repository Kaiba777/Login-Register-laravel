<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function store(LoginRequest $request) {
        $user = User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
        return redirect()->route('login')->with('success', "Votre compte a bien été créer");
    }
}
