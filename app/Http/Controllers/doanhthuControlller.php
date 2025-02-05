<?php

namespace App\Http\Controllers;
use App\Models\thanhtoan;
use Illuminate\Http\Request;

class doanhthuControlller extends Controller
{
    public function thongke (){
        $today = date("Y-m-d");

      
        $dayOfWeek = date("N", strtotime($today));
        
        //trả về ngày đầu tiên trong tuần
        $firstDayOfWeek = date("Y-m-d", strtotime("-" . ($dayOfWeek - 1) . " day", strtotime($today)));

        //trả về ngày cuối trong tuần
        $lastDayOfWeek =date("Y-m-d", strtotime("+" . (7 - $dayOfWeek) . " day", strtotime($today)));


        $thanhToanByDay = [];

        //mảng gồm 7 phần tử [0,1,2,3,4,5,6,7]
        for ($i = 0; $i < 7; $i++) {
            $currentDay = date("Y-m-d", strtotime("+$i days", strtotime($firstDayOfWeek)));
            $thanhToanByDay[$currentDay] = 0;
        }

        //lấy dữ liệu từ phần thanh toán từ updated_at từ ngày đầu tuần đến ngay cuối tuần
        $thanhtoan = thanhtoan::whereBetween('updated_at', [$firstDayOfWeek, $lastDayOfWeek])
            ->where('status', thanhtoan::confirm)
            ->get();

        foreach ($thanhtoan as $item) {
            $date = date('Y-m-d', strtotime($item->updated_at));
                // [13/11/2023 => 65000, 14/11/2023 => 100000]
            // Kiểm tra xem ngày có tồn tại trong mảng không trước khi thực hiện thêm vào
            if (array_key_exists($date, $thanhToanByDay)) {
                $thanhToanByDay[$date] += $item->tongtien;
            } else { 
                // Nếu không tồn tại, có thể thực hiện xử lý phù hợp, ví dụ: bỏ qua hoặc tạo ngày mới
            }
            }


            //data:[1,2,3,4,5,6,7,8,9,10] 
            //thanhtoan [63000,200000,0,0,0,0,0,0]
            $thanhtoanByDayValues = array_values($thanhToanByDay);
        

        return view ('doanhthu.thongke',compact('thanhtoanByDayValues'));
    }

    public function thongketuan(Request $request){

        $weekString = $request->week;
        $firstDayOfWeek = date("Y-m-d", strtotime($weekString . "-1")); // Ngày đầu tuần (thứ 2)
        $lastDayOfWeek = date("Y-m-d", strtotime($weekString . "-7")); // Ngày cuối tuần (Chủ nhật)

        $thanhToanByDay = [];

        //mảng gồm 7 phần tử [0,1,2,3,4,5,6,7]
        for ($i = 0; $i < 7; $i++) {
            $currentDay = date("Y-m-d", strtotime("+$i days", strtotime($firstDayOfWeek)));
            $thanhToanByDay[$currentDay] = 0;
        }

        //lấy dữ liệu từ phần thanh toán từ updated_at từ ngày đầu tuần đến ngay cuối tuần
        $thanhtoan = thanhtoan::whereBetween('updated_at', [$firstDayOfWeek, $lastDayOfWeek])
            ->where('status', thanhtoan::confirm)
            ->get();

        foreach ($thanhtoan as $item) {
            $date = date('Y-m-d', strtotime($item->updated_at));
                // [13/11/2023 => 65000, 14/11/2023 => 100000]
            // Kiểm tra xem ngày có tồn tại trong mảng không trước khi thực hiện thêm vào
            if (array_key_exists($date, $thanhToanByDay)) {
                $thanhToanByDay[$date] += $item->tongtien;
            } else { 
                // Nếu không tồn tại, có thể thực hiện xử lý phù hợp, ví dụ: bỏ qua hoặc tạo ngày mới
            }
            }


            //data:[1,2,3,4,5,6,7,8,9,10] 
            //thanhtoan [63000,200000,0,0,0,0,0,0]
            $thanhtoanByDayValues = array_values($thanhToanByDay);
        

        return view ('doanhthu.thongke',compact('thanhtoanByDayValues'));
    }
}
