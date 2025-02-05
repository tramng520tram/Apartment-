@extends('trangchu')
@section('title')
    Loại Phòng
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
                           Quản lý loại phòng

                        </div>
                        <div class="col-7">
                            <a href="{{route('phong.themphong')}}"><i class="fa-solid fa-square-plus" style="margin-left: 460px;"></i> Thêm phòng</a>
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
                                                    <th>Tên loại phòng</th>
                                                   
                                                    <th>Thao tác</th>
		                                        </tr>
	                                        </thead>
                                            <tbody>
                                                <tr>
                                                @foreach($loaiphong as $loai)
                                                <td>{{$loop->iteration}}</td>   
                                                <td>{{$loai->tenloaiphong}}</td>
                                                <td> 
                                                     
                                                           <a href="{{route('phong.update',['id' => $loai->id])}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                                            <a href="{{route('phong.delete',['id' => $loai->id])}}"><i class="fa-solid fa-trash"></i></a>
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



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm phòng</title>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.2-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dangnhap.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .hello{
            color: black;
            text-align: center;
          padding-top: 15px;
        }
        .emailaddress{
            margin-top:10px;
        }
       .container{
        margin-top: 50px;
        
      
        }
        .col-md-12{
            border-radius: 10px;
          box-shadow:0 0 10px #C0C0C0;
          margin-left: 400px;
          width: 400px;
          height: 220px;
          filter: blur(0px);
        }
        .taotk{
            margin-top: 60px;
            text-align: center;
        }
        input{
            padding-right: 15px
            
        }
        .form-group{
            width: 350px;
            display: flex;
            float: left;
            margin-top:10px;
        }
       
            background-repeat: no-repeat;
            background-image: url('/img/1.png');
        
        .form-control{
            margin-left: 30px;
        }
        .emailaddress{
            width: 88px;
        }
        .gt{
            margin-left: 25px;
        }
        label{
            width: 50px;
        }
       
    </style>
</head>
<body class="bg-image">
    <form action="{{route('tang.themtangPost')}}" method="POST" class="form">
        @csrf 
        <div class="container">
            <div class="col-md-12">
                <h2 class="hello">Thêm tầng</h2>
                
                <div class="form-group">
                    <label class="emailaddress" for="exampleInputEmail1">Tên tầng</label>
                    <input required name='name' type="text" class="form-control" placeholder="">
                </div>
               
                <div class="sub">
                <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </div>
        </div>
    </form>
    
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
</body>
</html> 