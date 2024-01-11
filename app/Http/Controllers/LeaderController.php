<?php

namespace App\Http\Controllers;

use App\Models\leader;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function submitLeader(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'whatsapp'=> 'required',
            'lineId'=> 'required',
            'gitId'=> 'required',
            'birthPlace'=> 'required',
            //birthdate belum validasi
            'cv'=> 'required',
            'flazzCard'=> 'required',
            'idCard'=> 'required'
        ]);
        Leader::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'whatsapp'=> $request->whatsapp,
            'lineId'=> $request->lineId,
            'gitId'=> $request->gitId,
            'birthPlace'=> $request->birthPlace,
            'birthDate'=> $request->birthDate,
            'cv'=> $request->cv,
            'flazzCard'=> $request->flazzCard,
            'idCard'=> $request->idCard
        ]);
        return redirect(route('homepage'));
    }
    public function homepage(){
        return view('homepage');
    }
}
