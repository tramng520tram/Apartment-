<?php

namespace App\Http\Controllers;
use App\Models\loaiphong;
use App\Models\tang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\phong;


class phongchungcuController extends Controller
{
    public function danhsach(){
        $phong = phong::all();
        // dd($phong);
        $phong->map(function($items){
            $items->name_tang;
            $items->name_loaiphong;
            return $items;
        });
      
        return view ('phongchungcu.danhsach', compact ('phong'));
    }
    public function them_phong(){
        $tang = tang::all();
        $loaiphong = loaiphong::all();
        
        return view ('phongchungcu.themphong', compact('tang','loaiphong'));
    }
    public function luuphong(Request $request){
        // dd($request->all());
        $phong = phong::create([
            
            'tenphong'=>$request->name,
            'id_tang'=>$request->id_tang,
            'giaphong'=>$request->giaphong,
            'id_loaiphong'=>$request->id_loaiphong,
            'status'=>$request->status,
            'active'=>$request->active,
            // 'mota'=>$request->noidung,
        ]);
    
        if ($request->hasFile('upload-img')) {
         
            $file = $request->file('upload-img');
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/', $file_name);
          
            $phong->update([
                'img' => $file_name
            ]);
        }
        return redirect()->route('phongchungcu.danhsach');
    }
    public function suaphong($id){
        $suaphong = phong::find($id);
        $tang = tang::all();
        $loaiphong = loaiphong::all();
        return view('phongchungcu.suaphong',compact('suaphong','tang','loaiphong'));
    }
    public function delete($id){
        $phong = phong::find($id);
        $phong->delete();
        return redirect()->route('phongchungcu.danhsach');
    }

    public function capnhat(Request $request){
        // dd($request->all());
        $id = $request->id_phong;
        $phong = phong::find($id);
        $phong->update([
            'tenphong'=> $request ->tenphong,
            'giaphong'=> $request ->giaphong,
            'id_tang'=> $request ->id_tang,
            'id_loaiphong'=> $request ->id_loaiphong,
            'status'=> $request ->status,
            'active'=> $request ->active,
            'mota'=> $request->mota,
        ]);
        if ($request->hasFile('upload-img')) {
         
            $file = $request->file('upload-img');
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/', $file_name);
          
            $phong->update([
                'img' => $file_name
            ]);
        }
        return redirect()->route('phongchungcu.danhsach');
    }
}
