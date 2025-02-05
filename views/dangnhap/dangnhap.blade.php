<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('img') }}">
    <link rel="stylesheet" href="{{ asset('css/dangnhap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gluten&family=Nunito+Sans:wght@200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .hello {
            color: black;
            /*text-align: center; */
            font-family: 'Nunito Sans';
            font-weight: bold;


        }

        .emailaddress {
            margin-top: 10px;
        }

        .container {
            margin-top: 30px;

            /* top: 50%;
        left: 50%;
        transform: translate(-50%, -50%); */
        }

        .col-md-12 {
            margin-top: -500px;
            background-color: white;

            margin-left: 990px;
            width: 390px;
            height: 457px;
        }

        .btn-primary {
            color: #fff;

            border-color: #69dbcd;
            width: 362px;
            margin-top: 15px;

            background-color: #008375;
        }

        .quenmk {
            margin-left: 250px;
            color: #499f94;
        }

        .taotk {
            margin-top: 60px;
            text-align: center;

        }

        a {
            color: #499f94;
        }

        .btn-primary.clicked {
            background-color: red;
        }

        .tieude {
            font-size: 50px;
            margin-top: 50px;
            text-align: center;
            font-family: 'Gluten';
            color: #3394a3;
        }

        img {
            vertical-align: middle;
            border-style: none;
            width: 931px;
            height: 707px;
        }

        .quenmk {
            margin-left: 250px
        }

        /*  */
        img {
            width: 100%;
        }
        .login {
            height: 700px;
            width: 100%;
            background: radial-gradient(circle at center right, #008375, rgb(121, 223, 173), #008375, #75ebb6, #008375);
            position: relative;
        }
        .login_box {
           
            width: 1050px;
            height: 600px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 5px 5px rgb(84, 167, 132);
            display: flex;
            overflow: hidden;
        }
        .login_box .left {
            width: 41%;
            height: 100%;
            padding: 25px 25px;
        }
        .login_box .right {
            width: 59%;
            height: 100%
        }
        .left .top_link a {
            color: #452A5A;
            font-weight: 400;
        }
        .left .top_link {
            height: 20px
        }
        .left .contact {
            display: flex;
            align-items: center;
            justify-content: center;
            align-self: center;
            height: 100%;
            width: 73%;
            margin: auto;
        }
        .left h3 {
            text-align: center;
            margin-bottom: 40px;
        }
        .left input {
            border: none;
            width: 80%;
            margin: 15px 0px;
            border-bottom: 1px solid #4f30677d;
            padding: 7px 9px;
            width: 100%;
            overflow: hidden;
            background: transparent;
            font-weight: 600;
            font-size: 14px;
        }
        .left {
            background: linear-gradient(-45deg, #dcd7e0, #fff);
        }

        .submit {
            border: none;
            padding: 15px 70px;
            border-radius: 8px;
            display: block;
            margin: auto;
            margin-top: 120px;
            background: #583672;
            color: #fff;
            font-weight: bold;
            -webkit-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
            -moz-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
            box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
        }
        .right {
            background: linear-gradient(212.38deg, rgba(181, 235, 202, 0.7) 0%, rgba(3, 35, 31, 0.71) 100%), url({{asset('./assets/img/12.png')}});
            /* background-size: cover; */
             /* background-repeat: no-repeat; */
             background-size: cover;
            position: relative;
        }
        .right .right-text {
            height: 100%;
            position: relative;
            transform: translate(0%, 45%);
        }
        .right-text h2 {
            display: block;
            width: 100%;
            text-align: center;
            font-size: 50px;
            font-weight: 500;
        }
        .right-text h5 {
            display: block;
            width: 100%;
            text-align: center;
            font-size: 19px;
            font-weight: 400;
        }
        .right .right-inductor {
            position: absolute;
            width: 70px;
            height: 7px;
            background: #fff0;
            left: 50%;
            bottom: 70px;
            transform: translate(-50%, 0%);
        }
        .btn:hover{
            background-color: #10514a;
        }
        /*  */
    </style>
</head>
<body>
    <section class="login">
        <div class="login_box">
            <div class="left">
                <img src="{{asset('./assets/img/pond.png')}}" alt="Image" style="margin-left: 125px;padding-bottom: 15px;width: 150px;height: 150px">
                <div class="contact" style="margin-top: -110px">
                  
                    <form action="{{ route('trangchu.dangnhapPost') }}" method="POST" class="form">
                        @csrf

                        <h3>ĐĂNG NHẬP</h3>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Email / Số điện thoại ">
                        <input name="password" class="form-control fill-password" type="password"
                            id="exampleInputPassword1" placeholder="Mật khẩu">
                        <div class="row">
                            <div class="col-2">
                                <input type="checkbox" class="checkthis" style="margin-left: -10px;">
                            </div>
                            <div class="col-10">
                                <p style="margin-left: -30px; margin-top:8px;">Hiển thị mật khẩu</p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        <div class="taotk">
                            <a href="{{ route('trangchu.taonguoidung')}}" class="taotk2" style="color: #008375;">Tạo tài
                                khoản</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="right-text">
                    <h2 style="text-shadow: 2px 2px 4px rgba(253, 253, 253, 0.895);
                    transition: text-shadow 0.3s ease;">PPW MASTERIES</h2>
                    <h5 style="text-shadow: 2px 2px 4px rgba(255, 248, 248, 0.908);
                    transition: text-shadow 0.3s ease;">NO.1 CHOICE FOR YOU</h5>
                </div>
                   
            </div>
        </div>
    </section>
    {{--  --}}

    </form>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script>
        $(document).ready(function() {
            $('.checkthis').click(function() {
                if ($(this).is(':checked')) {
                    $('.fill-password').attr('type', 'text');
                } else {
                    $('.fill-password').attr('type', 'password');
                }
            });
        });
    </script>
</body>

</html>
