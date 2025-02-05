@extends('trangchu')
@section('title')
Trang chủ
@endsection
@section('css')
<style>
    .fa-solid{
        color: #008375;
        margin-left: 10px;
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
                        <div class="col-5">
                            <!-- title trang -->
                            Quản lý phòng
                        </div>
                        <div class="col-7">
                            <a href="{{route('phongchungcu.them_phong')}}">
                                <i class="fa-solid fa-square-plus" style="margin-left: 472px;"></i> Thêm phòng
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-5">
                        <!-- body trang -->
                        @php
                        use App\Models\phong;
                        @endphp
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên phòng</th>
                                                <th>Tên tầng</th>
                                                <th>Loại phòng</th>
                                                <th>Trạng thái</th>
                                                <th>Tình trạng</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($phong as $showphong)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$showphong->tenphong}}</td>
                                                <td>{{$showphong->name_tang->name}}</td>
                                                <td>{{$showphong->name_loaiphong->tenloaiphong}}</td>
                                                <td>
                                                    @if($showphong->status == phong::NULL)
                                                    <div class="bg-secondary  text-white text-center"
                                                        style="border-radius:20px; ">
                                                        Phòng rỗng
                                                    </div>
                                                    @elseif($showphong->status == phong::ORDER)
                                                    <div class="bg-success  text-white text-center"
                                                        style="border-radius:20px; ">
                                                        Đã đặt phòng
                                                    </div>
                                                    @elseif($showphong->status == phong::REQUEST)
                                                    <div class="bg-warning  text-white text-center"
                                                        style="border-radius:20px; ">
                                                        Yêu cầu đặt phòng
                                                    </div>
                                                    @elseif($showphong->status == phong::CANCEL)
                                                    <div class="bg-danger  text-white text-center"
                                                        style="border-radius:20px; ">
                                                        Bảo trì                                                    </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($showphong->active == phong::ACTIVE)
                                                    <div class="bg-success   text-white text-center"
                                                        style="border-radius:20px; ">
                                                        Đang hoạt động
                                                    </div>
                                                    @else
                                                    <div class="bg-danger   text-white text-center"
                                                        style="border-radius:20px; ">
                                                        Ngưng hoạt động
                                                    </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('phongchungcu.suaphong',['id'=>$showphong->id])}}"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="{{route('phongchungcu.delete',['id'=>$showphong->id])}}"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
    var table = new DataTable("table");
});
</script>
@endsection