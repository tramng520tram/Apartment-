<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\thanhtoan;
use App\Models\thongtindatphong;


class thanhtoanController extends Controller
{
    public function thongtinthanhtoan(){
        $thanhtoan = thanhtoan::with('tennguoidat')->with('tenphong')->get();
        return view('thongtin.thongtindatphong', compact('thanhtoan'));
    }
    public function delete($id){
        $xoathanhtoan = thanhtoan::find($id);
        $xoathanhtoan -> delete();
        return redirect()->route('thanhtoan.thongtinthanhtoan'); 
    }
    public function updatethanhtoan($id){
        $thongtinthanhtoan = thanhtoan::where('id',$id)
        ->with('thongtin')->with('tenphong')->first();
        // dd($thongtinthanhtoan->tenphong->tenphong);
        // $thongtinthanhtoan->thongtinnguoidat->map(function($items){
        //         $items->thongtin;
        //         return $items;
        // });
        return view('thongtin.updatethanhtoan', compact('thongtinthanhtoan'));
    }
   public function update(Request $request){
        $id = $request -> id;
        $thongtinthanhtoan = thanhtoan::find($id);
        $thongtinthanhtoan->update([
            'giakhuyenmai'=>$request->giakhuyenmai,
            'hnhthuckhuyenmai'=>$request->hinhthuckhuyenmai,
            'giaphuthu'=>$request->giaphuthu,
            'hinhthucphuthu'=>$request->hinhthucphuthu,
            'hinhthucthanhtoan'=>$request->hinhthucthanhtoan,
        ]);
        return redirect()->route('thanhtoan.thongtinthanhtoan');
   }

   public function thanhtoanthanhcong(Request $request){
        $update_status = thanhtoan::find($request->id_thongtindatphong);
        $tongtien = 0;
                            if ($update_status->hinhthuckhuyenmai == '1') {
                                $tongtien = $update_status->giatien + ($update_status->giaphuthu ?? 0) - (($update_status->giatien + ($update_status->giaphuthu ?? 0)) * ($update_status->giakhuyenmai ?? 0)) / 100;
                            } else {
                                $tongtien = $update_status->giatien - ($update_status->giakhuyenmai ?? 0) + ($update_status->giaphuthu ?? 0);
                            }
        $update_status->update([
             'status' => thanhtoan::confirm,
             'tiennhan' => $request->tien_nhan,
             'tongtien' => $tongtien,
        ]);
        
         return redirect()->route('thanhtoan.thongtinthanhtoan');
}
    public function inhoadon($id){
        $thanhtoan = thanhtoan::where('id',$id)->with('tennguoidat','tenphong','thongtin')->first();
        // dd($thanhtoan); 
        return view('thongtin.inhoadon',compact('thanhtoan'));
    }
}

