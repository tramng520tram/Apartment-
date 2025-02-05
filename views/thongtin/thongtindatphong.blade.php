@extends('trangchu')
@section('title')
    Trang chủ
@endsection
@section('css')
    <style>
        #exTab1 .tab-content {
            color:#344767;
          
            padding: 5px 15px;
        }
        #exTab2 h3 {
            color: white;
           
            padding: 5px 15px;
        }
        #exTab1 .nav-pills>li>a {
            border-radius: 0;
            padding-right: 50px;
            
        }
        .fa-solid{
        color: #008375;
        margin-left: 10px;
        font-size: 20px;
    }
     
    </style>
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
                            </div> <br><br>
                            {{-- nav tab --}}

                            <div id="exTab1" class="container">
                                <ul class="nav nav-pills" style="background: #ffffff;">
                                    <li class="active">
                                        <a href="#tb1" data-toggle="tab">Đã thanh toán</a>
                                    </li>
                                    <li><a href="#tb2" data-toggle="tab">Chưa thanh toán</a>
                                    </li>
                                   
                                </ul>
                                @php 
                                use Carbon\Carbon;
                                use App\Models\thanhtoan;
                            @endphp 
                                <div class="tab-content clearfix">
                                    <div class="tab-pane active" id="tb1">
                                        <div class="col-md-12">
                                            <table id="myTable" class="display">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Họ và tên</th>
                                                        <th>Tên phòng</th>
                                                        <th>Hình thức khuyến mãi</th>
                                                        <th>Hình thức phụ thu</th>
                                                        <th>Giá phụ thu</th>
                                                        <th>Ngày nhận</th>
                                                        <th>Giá tiền</th>
                                                        <th>Hình thức thanh toán</th>
                                                        <th>Hình thức</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($thanhtoan as $thongtinthanhtoan)
                                                        @if($thongtinthanhtoan->status == thanhtoan::confirm)
                                                            <tr>
                                                                <td>{{$loop->iteration}}</td>
                                                                <td>{{$thongtinthanhtoan->tennguoidat->hoten}}</td>
                                                                <td>{{$thongtinthanhtoan->tenphong->tenphong}}</td>
                                                                <td>{{$thongtinthanhtoan->giakhuyenmai ?? 0}} 
                                                                    @if($thongtinthanhtoan->hinhthuckhuyenmai == '1') 
                                                                        %
                                                                    @else
                                                                        VNĐ 
                                                                    @endif
                                                                </td>

                                                                <td>{{$thongtinthanhtoan->hinhthucphuthu }}
                                                                    @if($thongtinthanhtoan->hinhthucphuthu == '1') 
                                                                        Theo giờ
                                                                    @else
                                                                        Theo ngày
                                                                    @endif
                                                                </td>

                                                                <td>{{$thongtinthanhtoan->giaphuthu ?? 0}} </td>
                                                                <td>{{($thongtinthanhtoan->created_at)->format('d/m/y') }}</td>
                                                                <td>{{$thongtinthanhtoan->giatien ?? 0}}</td>
                                                                <td>
                                                                    @if($thongtinthanhtoan->hinhthucthanhtoan == '1')
                                                                        Tiền mặt
                                                                    @else
                                                                        Chuyển khoản
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <a href="{{route('thanhtoan.inhoadon',['id' => $thongtinthanhtoan->id])}}" target="_blank">
                                                                    <i class="fa-solid fa-print" style="color: #008375;cursor: pointer;"
                                                                    {{-- onclick="inhoadon({{$thongtinthanhtoan->id}})" --}}
                                                                    ></i>
                                                                </a></td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tb2">
                                        <div class="col-md-12">
                                            <table id="myTable" class="display">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Họ và tên</th>
                                                        <th>Tên phòng</th>
                                                        <th>Hình thức khuyến mãi</th>
                                                        <th>Hình thức phụ thu</th>
                                                        <th>Giá phụ thu</th>
                                                        <th>Ngày nhận</th>
                                                        <th>Giá tiền</th>
                                                        <th>Hình thức thanh toán</th>
                                                        <th>Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    @foreach ($thanhtoan as $thongtinthanhtoan)
                                                        @if($thongtinthanhtoan->status == thanhtoan::unconfirm)
                                                                {{-- {{dd($thongtinthanhtoan)}} --}}
                                                            <tr>
                                                                <td>{{$loop->iteration}}</td>
                                                                <td>{{$thongtinthanhtoan->tennguoidat->hoten ?? ''}}</td>
                                                                <td>{{$thongtinthanhtoan->tenphong->tenphong}}</td>
                                                               
                                                                <td>{{$thongtinthanhtoan->giakhuyenmai ?? '0'}} 
                                                                    @if($thongtinthanhtoan->hinhthuckhuyenmai == '1') 
                                                                        %
                                                                    @else
                                                                        VNĐ 
                                                                    @endif
                                                                </td>

                                                                <td>{{$thongtinthanhtoan->hinhthucphuthu }}
                                                                    @if($thongtinthanhtoan->hinhthucphuthu == '2') 
                                                                        Theo ngày
                                                                    @else
                                                                        Theo giờ
                                                                    @endif
                                                                </td>
                                                                

                                                                <td>{{$thongtinthanhtoan->giaphuthu ?? 0}} </td>
                                                                <td>{{($thongtinthanhtoan->created_at)->format('d/m/y') }}</td>
                                                                <td>{{$thongtinthanhtoan->giatien }}</td>
                                                                <td>
                                                                    @if($thongtinthanhtoan->hinhthucthanhtoan == '1')
                                                                        Tiền mặt
                                                                    @else
                                                                        Chuyển khoản
                                                                    @endif
                                                                </td>
                                                                <td>
                                                </div>
                                                                    <i class="fa-solid fa-square-check" style="color: #008375;cursor: pointer;margin-left: 25px;" 
                                                                        onclick="thongtin({{ $thongtinthanhtoan->id }})"></i><br>
                                                                    <a href="{{route('thanhtoan.updatethanhtoan',['id'=>$thongtinthanhtoan->id])}}"><i class="fa-solid fa-pen-to-square" style="color: #008375;"></i></a>    
                                                                    <a href="{{route('thanhtoan.delete',['id'=>$thongtinthanhtoan->id])}}"><i class="fa-solid fa-trash" style="color: #008375;"></i></a>
                                                                    {{-- --}}
                                                                </div>

                                                                </td>
                                                                
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                            {{-- nav tab --}}

                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-5">
                            <!-- body trang -->
                            <div class="container">
                                <div class="row">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('thongtin.modal_thongtin')
  {{-- @include('thongtin.inhoadon') --}}
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('#thongtin_thanhtoan').modal('show');
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            var table = new DataTable("table");
        });
    </script>
    <script>
        function thongtin(id) {
            $('#id_thanhtoan').val(id);
            $('#thongtin_thanhtoan').modal('show');
            $('#id_thongtindatphong').val(id);
}
        function inhoadon(id) {
            $('#id_inhoadon').val(id);
            $('#thongtin_inhoadon').modal('show');
        }
            
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@endsection
