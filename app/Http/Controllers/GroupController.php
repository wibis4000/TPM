<?php

namespace App\Http\Controllers;

use App\Models\group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function register(){
        return view('register');
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
