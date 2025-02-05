<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dangnhapController;
use App\Http\Controllers\dangkyController;
use App\Http\Controllers\tangController;
use App\Http\Controllers\loaiphongController;
use App\Http\Controllers\trangchuController;
use App\Http\Controllers\quenmkController;
use App\Http\Controllers\newController;
use App\Http\Controllers\userController;
use App\Http\Controllers\listController;
use App\Http\Controllers\phongchungcuController;
use App\Http\Controllers\thongtinController;
use App\Http\Controllers\dangxuatController;
use App\Http\Controllers\quenController;
use App\Http\Controllers\datphongController; 
use App\Http\Controllers\thanhtoanController; 
use App\Http\Controllers\doanhthuControlller; 
use App\Http\Controllers\khachhangControlller; 
use App\Http\Controllers\GetDiaChiController; 
use App\Http\Controllers\baitapController; 








/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // dd(auth()->user());
    // authencation->auth 
    return view ('dangnhap.dangnhap');
    
})->name('dangnhap1');


Route::group(['prefix'=>'trangchu', 'as'=>'trangchu.'], function(){
    Route::get('/dangnhap',[dangnhapController::class, 'dangnhap'])->name('dangnhap');
    Route::get('/dangky',[dangkyController::class, 'dangky'])->name('dangky'); 
    Route::get('/tao-nguoidung',[dangkyController::class, 'taonguoidung'])->name('taonguoidung'); 
    Route::post('/tao-nguoidungPost',[dangkyController::class, 'taonguoidungPost'])->name('taonguoidungPost'); 
    Route::post('/dangky-post',[dangkyController::class, 'dangkyPost'])->name('dangkyPost');
    Route::post('/dangnhap-post',[dangnhapController::class, 'dangnhapPost'])->name('dangnhapPost');
    Route::get('/trang-chu',[dangnhapController::class, 'trangchu'])->name('TrangChu');
    
});

    Route::group(['prefix'=>'user', 'as'=>'user.'], function(){
        Route::get('/index',[userController::class,'index'])->name('index');
        Route::get('/delete/{id}',[userController::class,'delete'])->name('delete');
        Route::get('/update/{id}',[userController::class,'update'])->name('update');
        Route::post('userupdatepost',[userController::class,'updatePost'])->name('updatePost');
        
});

    Route::group(['prefix'=>'tang', 'as'=>'tang.'], function(){
        Route::get('/them-tang',[tangController::class,'themtang'])->name('themtang');
        Route::post('/themtang-post',[tangController::class,'themtangPost'])->name('themtangPost');
        Route::get('/tang',[tangController::class,'dstang'])->name('dstang');
        Route::get('/delete/{id}',[tangController::class,'delete'])->name('delete');
        Route::get('/update/{id}',[tangController::class,'update'])->name('update');
        Route::post('tangupdatepost',[tangController::class,'updatePost'])->name('updatePost');
});

    Route::group(['prefix'=>'phong','as'=>'phong.'], function(){
        Route::get('/phong',[loaiphongController::class,'dsphong'])->name('dsphong');
        Route::get('/loai-phong',[loaiphongController::class,'loaiphong'])->name('loaiphong');
        Route::post('/loaiphong-post',[loaiphongController::class,'loaiphongPost'])->name('loaiphongPost');
        Route::get('/delete/{id}',[loaiphongController::class,'delete'])->name('delete');
        Route::get('/update/{id}',[loaiphongController::class,'update'])->name('update');
        Route::post('/loaiphongupdate-post',[loaiphongController::class,'updatePost'])->name('updatePost');
        Route::get('/themphong',[loaiphongController::class,'themphong'])->name('themphong');
        Route::post('/themphong-post',[loaiphongController::class,'themphongPost'])->name('themphongPost');
});

 
    Route::group(['prefix'=>'phongchungcu','as'=>'phongchungcu.'], function(){
        Route::get('/danhsach',[phongchungcuController::class,'danhsach'])->name('danhsach');
        Route::get('/themphongchungcu',[phongchungcuController::class,'them_phong'])->name('them_phong');
        Route::post('/luuphong',[phongchungcuController::class,'luuphong'])->name('luuphong');
        Route::get('/suaphongchungcu/{id}',[phongchungcuController::class,'suaphong'])->name('suaphong');
        Route::get('delete/{id}',[phongchungcuController::class,'delete'])->name('delete');
        Route::post('update',[phongchungcuController::class,'capnhat'])->name('capnhat');

    });
    Route::group(['prefix'=>'list','as'=>'list.'], function(){
        Route::get('/danhsach',[listController::class,'danhsach'])->name('danhsach');
        Route::get('/delete/{id}',[listController::class,'delete'])->name('delete');
        Route::post('store',[listController::class,'store'])->name('store');
        
    });

    Route::group(['prefix'=>'thongtin','as'=>'thongtin.'], function(){
        Route::get('/thongtincanhan',[thongtinController::class,'canhan'])->name('canhan');
        Route::post('/capnhat_thongtin',[thongtinController::class,'capnhatthongtin'])->name('capnhatthongtin');
       

    });

    Route::group(['prefix'=>'logout','as'=>'logout.'], function(){
        Route::get('/dang-xuat',[dangxuatController::class,'dangxuat'])->name('dangxuat');
    });

    Route::group(['prefix'=>'quen','as'=>'quen.'], function(){
        Route::get('/quen-mk',[quenController::class,'quenmk'])->name('quenmk');
        Route::post('/thaydoi-mk',[thongtinController::class,'thaydoimk'])->name('thaydoimk');
    });
    
    Route::group(['prefix'=>'thongtin','as'=>'thongtin.'], function(){
        Route::get('/thongtin_datphong',[datphongController::class,'thongtindatphong'])->name('thongtindatphong');
        Route::post('/thongtin_datphong_post',[datphongController::class,'thongtindatphong_post'])->name('thongtindatphong_post');
        Route::post('/duyetphong_post',[datphongController::class,'duyetphong_post'])->name('duyetphong_post');
        Route::post('/huyphong_post',[datphongController::class,'huyphong_post'])->name('huyphong_post');
        Route::post('/baotri_post',[datphongController::class,'baotri'])->name('baotri');
    });

    Route::group(['prefix'=>'thanhtoan','as'=>'thanhtoan.'], function(){
        Route::get('/thongtin_thanhtoan',[thanhtoanController::class,'thongtinthanhtoan'])->name('thongtinthanhtoan');
        Route::get('/delete/{id}',[thanhtoanController::class,'delete'])->name('delete');
        Route::get('/update-thanhtoan/{id}',[thanhtoanController::class,'updatethanhtoan'])->name('updatethanhtoan');
        Route::post('/update',[thanhtoanController::class,'update'])->name('update');
        Route::post('/thanhtoan-thanhcong',[thanhtoanController::class,'thanhtoanthanhcong'])->name('thanhtoanthanhcong');
        // Route::get('/update/{id}',[thanhtoanController::class,'update'])->name('update');
        Route::get('/in/{id}',[thanhtoanController::class,'inhoadon'])->name('inhoadon');
    });
     
Route::group(['prefix'=>'doanhthu', 'as'=>'doanhthu.'], function(){
    Route::get('/thong-ke',[doanhthuControlller::class, 'thongke'])->name('thongke');
    Route::get('/thong-ke-theo-tuan',[doanhthuControlller::class, 'thongketuan'])->name('thongketuan');
    
});

    
Route::group(['prefix'=>'kh', 'as'=>'kh.'], function(){
    Route::get('/khach-hang',[khachhangControlller::class, 'khachhang'])->name('khachhang');
    Route::get('/gioi-thieu',[khachhangControlller::class,'gioithieu'])->name('gioithieu');
    Route::get('/hinh-anh',[khachhangControlller::class,'hinhanh'])->name('hinhanh');

    
});


Route::group(['prefix'=>'diachi', 'as'=>'diachi.'], function(){
    Route::get('/get-quanhuyen',[GetDiaChiController::class, 'getQuanHuyen'])->name('getQuanHuyen');
    Route::get('/get-phuongxa',[GetDiaChiController::class, 'getPhuongxa'])->name('getPhuongxa');

});

Route::group(['prefix'=>'baitap', 'as'=>'baitap.'], function(){
    Route::get('/bt',[baitapController::class, 'bt1'])->name('bt1');
    Route::get('/bt_2',[baitapController::class, 'bt2'])->name('bt2');
});
   