<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trangchuController extends Controller
{
    public function trangchu(Request $request){
        return view('trangchu');
        
    }
}
