<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class dangxuatController extends Controller
{
    public function dangxuat(){
        if(Auth::check()){
            Auth::logout();
        }
        return redirect()->route('dangnhap1');
    }
}
