<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
// Invoke solo se utiliza cuando se tiene un sólo método
{
    public function index()
    {
        return view('home');
    }
}
