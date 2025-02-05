<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class thongtinController extends Controller
{
    public function canhan(){
        return view ('Thongtincanhan.thongtincanhan');
    }
    public function capnhatthongtin(Request $request){
        // dd($request->all());
        $id = $request -> id;
        $thongtin = User::find($id);
        $thongtin->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'CCCD'=>$request->CCCD,
            'SDT'=>$request->SDT,
            'GioiTinh'=>$request->GioiTinh,
        ]); 
        return redirect()->route('trangchu.TrangChu');
    }
    public function thaydoimk(Request $request){
       
        $id=$request->id;
        $thongtin = User::find($id);
        if(Hash::check($request->matkhaucu,$thongtin->password)){
            $thongtin->update([
                'password'=>Hash::make($request->matkhaumoi)
            ]);
            return redirect()->route('dangnhap1'); 
        }
    }
}
