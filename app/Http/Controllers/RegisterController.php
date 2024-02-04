<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Register;


class RegisterController extends Controller
{
    public function homepage(){
        return view('homepage');
    }
    public function login(){
        return view('login/login');
    }
    public function dashboard(){
        return view('login/dashboard');
    }
    public function contact(){
        return view('login/contact');
    }
    public function timeline(){
        return view('login/timeline');
    }
}
