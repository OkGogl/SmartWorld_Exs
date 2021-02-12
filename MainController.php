<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller{

    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function signup() {
        return view('signup');
    }

    public function signup_check(Request $request) {
        $valid = $request->validate( [
            'email' => 'required|max:50',
            'login' => 'required|min:5|max:20',
            'password' => 'required|min:8'
        ]);
    }
}
