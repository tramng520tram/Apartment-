<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\devvn_quanhuyen;
use App\Models\devvn_xaphuongthitran;




class GetDiaChiController extends Controller
{
    
    public function getQuanHuyen(Request $request){
        $id_tinh = $request->id_tinh;
     
        $getQuanHuyen  = devvn_quanhuyen::where('matp',$id_tinh)->get();
 
        return $getQuanHuyen;
    }
    public function getphuongxa(Request $request){
 
        $id_quanhuyen = $request->id_quanhuyen;
        $getPhuongxa = devvn_xaphuongthitran::where('maqh',$id_quanhuyen)->get();
    
        return $getPhuongxa;
    }
}
