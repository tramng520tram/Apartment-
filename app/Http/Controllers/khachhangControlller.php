<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class khachhangControlller extends Controller
{
    public function khachhang(){
        return view ('kh.khachhang');
    }
    public function gioithieu(){
        return view ('kh.gioithieu');
    }
    public function hinhanh(){
        return view ('kh.hinhanh');
    }
}
