<?php

namespace App\Http\Controllers;

use App\Models\group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function register(){
        return view('register');
    }
    public function register_2(){
        return view('register_2');
    }
    public function register_3(){
        return view('register_3');
    }
    public function register_4(){
        return view('register_4');
    }
    public function register_5(){
        return view('register_5');
    }
    public function signup(Request $request){
        $request->validate([
            'groupName' => 'required',
            'password' => 'required|min:8',
            'campus'=> 'required'
        ]);
        group::create([
            'groupName' => $request->groupName,
            'password' => $request->password,
            'campus'=> $request->campus
        ]);
        return redirect(route('registerLeader'));
    }
    public function registerLeader(){
        return view('registerLeader');
    }
}
