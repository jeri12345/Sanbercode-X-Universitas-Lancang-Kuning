<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view("register");
    }
    public function welcome(Request $request) {
        $first_name = $request->input('fname'); // Menggunakan input() untuk mendapatkan nilai dari form
        $last_name = $request->input('lname');
    
        return view("welcome", compact("first_name", "last_name"));
    }
}
