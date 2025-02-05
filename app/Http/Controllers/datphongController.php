<?php

namespace App\Http\Controllers;
use App\Models\thongtindatphong;
use Illuminate\Http\Request;
use App\Models\phong;
use App\Models\thanhtoan;
class datphongController extends Controller
{
    public function thongtindatphong(){
        return view('thongtin.thongtindatphong');
    }
    public function thongtindatphong_post(Request $request){
  
  
        $a = thongtindatphong::create([
            
            'hoten' => $request->hoten,
            'sdt' => $request-> sdt,
            'gmail' => $request-> gmail,
            'ngaysinh' => $request-> ngaysinh,
            'cmnd' => $request-> cmnd,
            'ngaynhan' => $request-> ngaynhan,
            'ngaytra' => $request-> ngaytra,
            'id_phong' => $request-> id_phong,
        ]);
       
        $update_status = phong::find($request->id_phong);
        $update_status->update([
                'status' => phong::REQUEST,
        ]);
        
        return redirect()->route('list.danhsach');
    }

    public function duyetphong_post(Request $request){
 
        $update_status = phong::find($request->id_phong);
        $update_status->update([
               'status' => phong::ORDER,
        ]);
        $phongDauTien = thongtindatphong::where('id_phong', $update_status->id)->orderBy('created_at', 'asc')->first();
      
        $thanhtoan = thanhtoan::create([
            'id_thongtindatphong' => $update_status->id,
            'giatien' => $update_status->giaphong,
            'status' => thanhtoan::unconfirm,
            'hinhthucthanhtoan' => thanhtoan::coast,
            'thongtinnguoidat'=> $phongDauTien->id,

        ]);
        return redirect()->route('list.danhsach');
    
   }
   public function huyphong_post(Request $request){

            $update_status = phong::find($request->id_phong);
            $update_status->update([
                'status' => phong::CANCEL,
            ]);
            // $phongCuoiCung = thongtindatphong::where('id_phong', 14)->orderBy('created_at', 'desc')->first();
            // $phongCuoiCung->delete();
           

        return redirect()->route('list.danhsach');
    }
    public function baotri(Request $request){
        $update_status = phong::find($request->id_phong);
        $update_status->update([
            'status' => phong::NULL,
        ]);
        return redirect()->route('list.danhsach');
    }
}
