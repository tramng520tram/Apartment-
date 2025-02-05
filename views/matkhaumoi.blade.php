
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy lại mật khẩu</title>
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
        
        /* top: 50%;
        left: 50%; 
        transform: translate(-50%, -50%); */
        }
        .col-md-12{
            border-radius: 10px;
          box-shadow:0 0 10px #C0C0C0;
          margin-left: 400px;
          width: 400px;
          height: 250px;
        }
        .taotk{
            margin-top: 60px;
            text-align: center;
        }
        input{
            padding-right: 15px
            
        }
        /* .form-group{
            width: 350px;
            display: flex;
            float: left;
            margin-top:10px;
        } */
        /* body{
            
            background-image: url('/img/1.png');
        } */
        .form-control {
            margin-left: 1px;
            width: 257px;
        }
        .emailaddress{
            width: 25px;
        }
        .gt{
            margin-left: 25px;
        }
        label{
            width: 50px;
        }
        .btn-primary {
        margin-top: -99px;
        margin-left: 266px;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }
    p{
    margin-top: -19px;
    margin-bottom: 1rem;
    }
    </style>
</head>
<body class="bg-image">

<div class="ms-auto me-auto mt-5" style="width:500px;">
            <div class="mt-5">
                <!-- Hiển thị lỗi -->
                @if($errors->any())
                <div class="col-12">
                    <!-- in lỗi -->
                    @foreach($error->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
                @endif
                <!-- Kiểm tra lỗi phiên dịch có hay không-->
                @if(session()->has('error'))
                <!-- Hiển thị cảnh cáo -->
                    <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                <!-- Kiểm tra có thành công hay ko -->
                @if(session()->has('success'))
                <!-- Hiển thị thành công -->
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
                </div>
        </div>

    <form action="{{route('quen.quen-mkPost')}}" method="POST" class="form">
        @csrf 
        <input type="text" name="token" hidden value='{{$token}}'>
        <div class="container">
            <div class="col-md-12">
                <h2 class="hello">Tạo mật khẩu mới</h2>
                <div class="form-group">
                    <label class="form-lable" >Mật khẩu mới</label>
                    <input required  type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label class="form-lable" >Nhập lại mật khẩu</label>
                    <input required  type="password" class="form-control" name="nhaplaipassword">
                </div>
                <button  type="submit" class="btn btn-primary">Xác nhận</button> <br> 

               <p >Bạn chưa có tài khoản ? <a href="{{route('trangchu.dangky')}}">Đăng ký</a></p>
                <p >Quay trở lại trang <a href="{{route('trangchu.dangnhap')}}">Đăng nhập</a></p>
            </div>
        </div>
    </form>
    
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
</body>
</html>