<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function cadastro()
    {
        return view('criar-conta');
    }

    public function login()
    {
        return view('login');
    }
}
