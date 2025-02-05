@extends('trangchu')
@section('title')
Trang chủ
@endsection
@section('css')

@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-6">
                            <!-- title trang -->
                            Thông tin thanh toán
                        </div>

                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-5">
                        <!-- body trang -->
                        <form action="{{route('thanhtoan.update')}}" method="POST">
                            @csrf
                            <input type="hidden" name ="id" value ="{{$thongtinthanhtoan->id}}"> 
                      <div class="row">
                       
                        <div class="w-100">
                           <h1 class="text-center" style="color: #008375; font-family: 'Alegreya Sans', sans-serif; font-weight:400;">Phòng {{$thongtinthanhtoan->tenphong->tenphong}} - {{ number_format($thongtinthanhtoan->giatien, 0, '.', ',')  }} VNĐ</h1>
                           
                                {{-- <input type="text" name="tenphong" class="form-control" value="" disabled> --}}
                        </div>
                      </div>
                        @php 
 use Carbon\Carbon;
                        @endphp
                      
                            <div class="row">
                            <div class="col-6">
                                <label class="emailaddress" for="exampleInputEmail1">Họ và Tên</label>
                                <input type="text" name="hoten" class="form-control" value="{{$thongtinthanhtoan->thongtin->hoten}}" disabled>
                            </div>
                            <div class="col-6">
                                <label class="emailaddress" for="exampleInputEmail1">Số điện thoại</label>
                                <input type="text" name="sdt" class="form-control" value="{{$thongtinthanhtoan->thongtin->sdt}}" disabled>
                            </div>
                            <div class="col-6">
                                <label class="emailaddress" for="exampleInputEmail1">Gmail</label>
                                <input type="text" name="Gmail" class="form-control" value="{{$thongtinthanhtoan->thongtin->gmail}}" disabled>
                            </div>
                            <div class="col-6">
                                <label class="emailaddress" for="exampleInputEmail1">Ngày sinh</label>

                                @php
                                    
                                @endphp
                                <input type="text" name="ngaysinh" class="form-control" value="{{($thongtinthanhtoan->thongtin->ngaysinh)}}" disabled>
                            </div>
                            <div class="col-6">
                                <label class="emailaddress" for="exampleInputEmail1">CMND/CCCD</label>
                                <input type="text" name="cmnd" class="form-control" value="{{$thongtinthanhtoan->thongtin->cmnd}}" disabled>
                            </div>
                            <div class="col-6">
                                <label class="emailaddress" for="exampleInputEmail1" >Ngày nhận</label>
                                <input type="text" name="created_at" class="form-control" value="{{$thongtinthanhtoan->thongtin->ngaynhan}}" disabled>
                            </div>
                            <div class="col-6">
                                <label class="emailaddress" for="exampleInputEmail1">Ngày trả</label>
                                <input type="text" name="ngaytra" class="form-control" value="{{$thongtinthanhtoan->thongtin->ngaytra  }}" disabled>
                            </div>
                            <div class="col-6">
                                <label class="emailaddress" for="exampleInputEmail1">Hình thức khuyến mãi</label>
                                <div class="row">
                                    <div class="col-8 pr-0" style="padding-right:0px !important;">
                                        <input type="text" name="giakhuyenmai" class="form-control" value="{{$thongtinthanhtoan->giakhuyenmai ?? 0}}">
                                    </div>
                                    <div class="col-4 " style="padding-left:0px !important;">
                                        <select class="form-control" name="hinhthuckhuyenmai" id="">
                                            @if($thongtinthanhtoan->hinhthuckhuyenmai == '2' || $thongtinthanhtoan->hinhthuckhuyenmai == null)
                                                <option value="2" selected>VNĐ</option>
                                                <option value="1">%</option>
                                            @else
                                                <option value="2" >VNĐ</option>
                                                <option value="1"selected>%</option>
                                            @endif
                                        </select>
                                    </div>
                            
                              
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="emailaddress" for="exampleInputEmail1">Hình thức phụ thu</label>
                                <div class="row">
                                    <div class="col-8 pr-0" style="padding-right:0px !important;">
                                        <input type="text" name="giaphuthu" class="form-control" value="{{$thongtinthanhtoan->giaphuthu ?? 0  }}">
                                    </div>
                                    <div class="col-4 " style="padding-left:0px !important;">
                                        <select class="form-control" name="hinhthucphuthu" id="">
                                            @if($thongtinthanhtoan->hinhthucphuthu == '2' || $thongtinthanhtoan->hinhthucphuthu == null)
                                                <option value="2" selected>Ngày</option>
                                                <option value="1">%</option>
                                            @else
                                                <option value="2" >Giờ</option>
                                                <option value="1"selected>%</option>
                                            @endif
                                        </select>
                                    </div>
                            
                              
                                </div>
                            </div>
                            <div class="col-6 d-flex" style="align-items:center; justify-content:space-between;">
                                <label class="emailaddress mb-0 " for="exampleInputEmail1">Hình thức thanh toán</label>
                            <div class="d-flex  ml-2" style="margin-left:10px !important;">
                                <input value="1" name="hinhthucthanhtoan" type="radio" @if ($thongtinthanhtoan->hinhthucthanhtoan == 1) checked @endif > <p class="mb-0 " style="margin-left:10px !important;">Tiền mặt</p>
                            </div>
                            <div class="d-flex" style="margin-left:10px !important;">
                                <input value="2" name="hinhthucthanhtoan" type="radio" @if ($thongtinthanhtoan->hinhthucthanhtoan == 2) checked @endif > <p class="mb-0" style="margin-left:10px !important;">Chuyển khoản</p>
                            </div>
                                
                            </div>
                        </div>
                            <button type="submit" class="btn mt-2" style="background-color:#008375; color:aliceblue ">
                                Lưu
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')

@endsection