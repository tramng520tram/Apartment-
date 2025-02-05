<?php

namespace App\Http\Controllers;
use App\Models\phong;
use Illuminate\Http\Request;

class listcontroller extends Controller
{
    public function danhsach(){
  
        $phong = phong::all();
        // dd($phong);
        return view ('list.list',compact('phong'));
    }
   public function store(Request $request){
        dd($request->all());

   }

}
