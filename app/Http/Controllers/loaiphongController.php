<?php

namespace App\Http\Controllers;
use App\Models\loaiphong;
use Illuminate\Http\Request;

class loaiphongController extends Controller
{
    public function loaiphong(Request $request){
        return view ('loaiphong');

    }
    public function loaiphongPost(Request $request){
        // dd($request->all());
        loaiphong::create([
       
        'id' =>$request->id,
        'tenloaiphong'=>$request->tenloaiphong,
        ]);
    }
    public function dsphong(Request $request){
        $loaiphong = loaiphong::all();

        return view('phong.phong', compact('loaiphong'));
    }
    public function delete($id){
           
        // tìm kiếm thông tin người dùng dựa vào khóa chính 
        $id = loaiphong::find($id);
        //xóa thông tin của người dùng bằng lệnh delete();
        $delete = $id->delete();
        // dd($user);
        return redirect()->route('phong.dsphong');
  
    
 
    }
    public function update($id){
        $capnhatphong = loaiphong::find($id);

        return view('phong.capnhatphong', compact('capnhatphong'));

    }
    public function updatePost(Request $request){
        $id = $request->id;
        $capnhatphong = loaiphong::find($id);
        $capnhatphong->update([
            'tenloaiphong' => $request->tenloaiphong,
        ]);

        return redirect()->route('phong.dsphong');        

    }

    public function themphong(Request $request){
        return view ('phong.themphong');
    }

    public function themphongPost(Request $request){
        loaiphong::create([
            'id'=> $request -> id,
            'tenloaiphong' => $request -> name,
        ]);
       return redirect()->route('phong.dsphong');
    
    }
    
      

}
