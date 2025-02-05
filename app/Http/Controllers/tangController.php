<?php

namespace App\Http\Controllers;

use App\Models\tang;
use Illuminate\Http\Request;
use Toastr;


class tangController extends Controller
{
    public function themtang(Request $request){
        // dd(1);
        return view ('tang.themtang');
    }

    public function themtangPost(Request $request){
        tang::create([
            'id'=>$request->id,     
            'name'=>$request->name,
        ]);
        return redirect()->route('tang.dstang');
    }
     public function dstang(Request $request){
         $tang = tang::all();
         
        return view ('tang.tang', compact('tang'));
   }

//     public function Post(Request $request){
//         // dd($request->all());
//         phong::create([
//             'tenphong' => $request -> e,
//             // bcrypt: mã hóa mật khẩu, chuyển chữ -> mã băm
//             'loaiphong' =>bcrypt($request -> password) ,
//             'tang' => $request -> CCCD,
            
//         ]);
// // }
  
    public function delete($id){
        // dd($id);
         $xoatang = tang::find($id);
         // dd($xoatang);
         $xoatang->delete();
         return redirect()->route('tang.dstang');
     }

    public function update($id){
        $capnhattang = tang::find($id);
        return view ('tang.capnhattang', compact('capnhattang'));
    }
    public function updatePost(Request $request){
        $id = $request->id;
        $capnhattang = tang::find($id);
        $capnhattang->update([
            'name'=>$request->name,
        ]);
        
        return redirect()->route('tang.dstang');
        
    }
}
