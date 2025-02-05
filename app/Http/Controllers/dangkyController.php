<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Toastr;
use Illuminate\Support\Facades\Storage;
use App\Models\devvn_tinhthanhpho;
use App\Models\devvn_quanhuyen;
use App\Models\devvn_xaphuongthitran;



class dangkyController extends Controller
{   
    public function dangky(){
        $tinh = devvn_tinhthanhpho::all();
        $getQuanHuyen=devvn_quanhuyen::all();
        $getXaphuong=devvn_xaphuongthitran::all();

        return view ('dangnhap.dangky', compact('tinh','getQuanHuyen','getXaphuong'));
    }
     
    public function taonguoidung(){
        return view ('dangnhap.taonguoidung');
    }
    public function taonguoidungPost(Request $request){
        $nguoidung = User::create([
            'name'=> $request ->name,
            'email' => $request -> email,
            // bcrypt: mã hóa mật khẩu, chuyển chữ -> mã băm
            'password' =>bcrypt($request -> password) ,
            'CCCD' => $request -> CCCD,
            'SDT' => $request -> SDT,
            'GioiTinh' => $request -> GioiTinh,
            'role_id'=>User::KHACHHANG,
        ]);
        return redirect()->route('trangchu.dangnhap');
    }
    public function dangkyPost(Request $request){
        // dd($request->all());
        $nguoidung = User::create([
            'name'=> $request ->name,
            'email' => $request -> email,
            // bcrypt: mã hóa mật khẩu, chuyển chữ -> mã băm
            'password' =>bcrypt($request -> password) ,
            'CCCD' => $request -> CCCD,
            'SDT' => $request -> SDT,
            'GioiTinh' => $request -> GioiTinh,
            'idtinh' => $request -> nametinh,
            'idquan' => $request -> namequan,
            'idpx' => $request -> namepx,
            'ngaysinh'=> $request ->ngaysinh,
            'role_id' => $request -> role_id,
        ]);

        if ($request->hasFile('upload-img')) {
         
            $file = $request->file('upload-img');
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/', $file_name);
          
            $nguoidung->update([
                'img' => $file_name
            ]);
        }
        return redirect()->route('user.index');
        
    }
}
