<?php

namespace App\Http\Controllers;
use Toastr;
use Illuminate\Support\Facades\Auth;    
use App\Models\User;

use Illuminate\Http\Request;

class dangnhapController extends Controller
{
    public function dangnhap(Request $request)
    {
        return view ('dangnhap.dangnhap');
    }
    public function dangnhapPost(Request $request)
    {   
        // dd($request->all());
        // $validated = $request->only('email','password');
        // $login_status = false;
        //session: bộ nhớ ảo
        //attemp: kiểm tra name/pass có trùng csdl, null
        $validated = $request->only('email', 'password');
        $login_status = false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $login_status = true;
        }
        if($login_status){
            // return redirect()->route('home');
            // Toastr::success('Đăng nhập thành công','Thông báo');
            // dd('dang nhap thanhcong');
            // Tra ve khi dang nhap thanh cong
            if(auth()->user()->role_id == User::KHACHHANG){
                return redirect()->route('kh.khachhang');
            }
            else{
                return redirect()->route('trangchu.TrangChu');
            }
        }
        else{
            Toastr::error('Đăng nhập thất bại', 'Thông báo');
            return redirect()->back()->with('Error','Đăng nhập thất bại');
        }
    }
    public function trangchu(Request $request){
        return view ('trangchu1');
        
    }
}

//Them loai phong, them tang
