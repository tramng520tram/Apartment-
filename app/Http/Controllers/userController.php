<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\tang;
use App\Models\devvn_tinhthanhpho;
use App\Models\devvn_quanhuyen;
use App\Models\devvn_xaphuongthitran;


use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(Request $request){
        $user = User::all();
        return view('user.index', compact('user'));
    }

   

    public function delete($id){
           
        // tìm kiếm thông tin người dùng dựa vào khóa chính 
        $user = User::find($id);
        //xóa thông tin của người dùng bằng lệnh delete();
        $delete = $user->delete();
        // dd($user);
        return redirect()->route('user.index');
    }

    public function update($id){
        $nguoidung = user::find($id);
        $tpho = devvn_tinhthanhpho::all();
        $getQuanHuyen=devvn_quanhuyen::all();
        $getXaphuong=devvn_xaphuongthitran::all();
        return view ('user.capnhatuser', compact('nguoidung','tpho','getQuanHuyen','getXaphuong'));
    }
   public function updatePost(Request $request){
    $id = $request -> id;   
    $Nguoidung = User::find($id);
    $Nguoidung->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'CCCD'=>$request->CCCD,
        'SDT'=>$request->SDT,
        'GioiTinh'=>$request->GioiTinh,
        'idtinh' => $request -> nametinh,
        'idquan' => $request -> namequan,
        'idpx' => $request -> namepx,
    ]);
    if ($request->hasFile('upload-img')) {
         
        $file = $request->file('upload-img');
        $file_name = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/', $file_name);
      
        $phong->update([
            'img' => $file_name
        ]);
    }
    return redirect()->route('user.index');
   }
}
