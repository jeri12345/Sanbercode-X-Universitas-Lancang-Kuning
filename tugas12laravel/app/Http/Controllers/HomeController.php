<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("halaman.dashboard");
    }

    public function tables()
    {
        return view('halaman.tabel');
    }

    public function data()
    {
        return view('halaman.data-tabel');
    }

    
    
}
