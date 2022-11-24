<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function layoutApp(){
        return view('layout.app');
    }
    
    public function login(){
        return view('login');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function register(){
        return view('register');
    }

}