@extends('trangchu')
@section('title')
    Tầng
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
                           Quản lý tầng

                        </div>
                        <div class="col-7">
                            <a href="{{route('tang.themtang')}}">
                            <i class="fa-solid fa-square-plus" style="margin-left: 472px;"></i> Thêm tầng
                            </a>
                        </div>
                       
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-5">
                            <!-- body trang -->
                            <div class="container">
	                            <div class="row">
		                            <div class="col-md-12">
                                        <table class="table">
	                                        <thead>
		                                        <tr>
                                                    <th>STT</th>
                                                    <th>Tầng</th>
                                                    <th>Thao tác</th>
		                                        </tr>
	                                        </thead>
	                                        <tbody>
                                                @foreach($tang as $hienthitang)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$hienthitang->name}}</td>
                                                         <td> 
                                                            <a href="{{route('tang.update',['id' => $hienthitang->id])}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                                            <a href="{{route('tang.delete',['id' => $hienthitang->id])}}"><i class="fa-solid fa-trash"></i></a>
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function(){
        $('#myTable').DataTable();
         var table = new DataTable("table");
    });
   
  </script>
   
  
@endsection


