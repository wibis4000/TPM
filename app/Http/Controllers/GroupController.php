<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function register(){
        return view('register');
    }
    public function registerLeader(){
        return view('registerLeader');
    }
}
