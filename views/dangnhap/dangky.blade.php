@extends('trangchu')
@section('title')
    Thêm người dùng
@endsection
@section('css')
    <style>
        .form-group {
            display: flex;
            float: left;
            width: 500px;
            align-items: center;

        }

        i {
            margin-bottom: 10px;

        }

        .form-control {
            margin-right: 30px;

        }

        .btn {
            margin-right: 500px;
            margin-top: 10px;

        }
        .file-wrapper{
            width: 200px;
            height: 200px;
            border: 10px solid gray;
            border-radius: 50%;
            position:relative;
            margin: auto;
            margin-top: 50px;
            }
            .file-wrapper:after{
            content: '+';
            position: absolute;
            top: 0; bottom: 0; left: 0; right: 0;margin: auto;
            width: max-content; height: max-content; display: block;
            max-height: 85px;
            font-size: 70px;
            font-weight: bolder;
            color: gray;
            }
            .file-wrapper:before{
            /* content: 'THÊM HÌNH ẢNH'; */
            display: block;
            position: absolute;
            left: 0; right: 0;
            margin: auto;
            bottom: 35px;
            width: max-content;
            height: max-content;
            font-size: 0.75em;
            color: gray;
            }
            .file-wrapper:hover:after{font-size: 73px;}
            .file-wrapper .close-btn{display: none;}
            input[type="file"]{
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            z-index: 99999;
            cursor: pointer;
            }
            .file-set{
            background-size: cover;
            background-repeat: no-repeat;
            color: transparent;
            padding: 10px;
            border-width: 0px;
            }
            .file-set:hover{
            transition: all 0.5s ease-out;
            filter:brightness(110%);
            }
            .file-set:before{color: transparent;}
            .file-set:after{color: transparent;}
            .file-set .close-btn{
            position: absolute;
            width: 35px;
            height: 35px;
            display: block;
            background: #000;
            color: #fff;
            top: 0; right: 0;
            font-size: 25px;
            text-align: center;
            line-height: 1.5;
            cursor: pointer;
            opacity: 0.8;
            }
            .file-set > input{pointer-events: none;}
         
    </style>
@endsection
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- title trang -->
                                Thêm người dùng
                            </div>

                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-5">
                            <!-- body trang -->
                            <form action="{{ route('trangchu.dangkyPost') }}" method="POST" class="form" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-4" style="margin-top: -40px ;margin-left: -30px ">
                                        <div class="file-wrapper">
                                            <input type="file" name="upload-img" accept="image/*" />
                                            <div class="close-btn">×</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="emailaddress" for="exampleInputEmail1">Tên:</label>
                                            <input required name="name" type="text" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                                                style=" margin-left: 18px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="emailaddress" for="exampleInputEmail1">Email:</label>
                                            <input required name="email" type="email" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                                                style=" margin-left: 4px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="emailaddress" for="exampleInputEmail1">CCCD:</label>
                                            <input required name="CCCD" type="text" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" "
                                                style=" margin-left: 4px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="emailaddress" for="exampleInputEmail1">SĐT:</label>
                                            <input required name="SDT" type="text" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                                                style=" margin-left: 15px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="emailaddress" for="exampleInputEmail1">Ngày sinh:</label>
                                            <input required name="ngaysinh" type="date" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                                                style=" margin-left: 15px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Tỉnh, Thành</label>
                                            <select name="nametinh" class="form-control" id="tinh" onchange="getTinh()">
                                              @foreach ($tinh as $tinhthanh)
                                                  <option value="{{$tinhthanh->matp}}" >{{$tinhthanh->name}}</option>
                                              @endforeach
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Quận, Huyện</label>
                                            <select name="namequan" class="form-control" id="quanhuyen" onchange="getQh()">
                                                <option value="">--- Vui lòng chọn Quận/Huyện ---</option>
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Xã, Phường</label>
                                            <select name="namepx" class="form-control" id="phuongxa" onchange="getXp()">
                                                <option value="">--- Vui lòng chọn Phường/Xã ---</option>
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Quyền</label>
                                            <select name="role_id" class="form-control" id="">
                                                <option value="1">Admin</option>
                                                <option value="2">Nhân viên</option>
                                                <option value="3">Khách hàng</option>
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="emailaddresss" for="exampleInputEmail1">Giới tính: </label>
                                            <input class="gt" style="margin-left: 10px" type="radio" id="male"
                                                name="GioiTinh" value="male">
                                            <label for="male">Nam</label>

                                            <input class="gt" style="margin-left: 10px" type="radio" id="female"
                                                name="GioiTinh" value="female">
                                            <label for="female">Nữ</label><br>
                                        </div>
                                    </div>
                                    
                                    
                            </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn " style="background-color: #008375; color:aliceblue;">Thêm</button>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    $('input[name="upload-img"]').on('change', function(){
        readURL(this, $('.file-wrapper'));  //Change the image
    
    });

    $('.close-btn').on('click', function(){ //Unset the image
    let file = $('input[name="upload-img"]');
    $('.file-wrapper').css('background-image', 'unset');
    $('.file-wrapper').removeClass('file-set');
    file.replaceWith( file = file.clone( true ) );
    });

    //FILE
    function readURL(input, obj){
    if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e){
        obj.css('background-image', 'url('+e.target.result+')');
        obj.addClass('file-set');
        }
        reader.readAsDataURL(input.files[0]);
    }
    };
    function getTinh(){
        var valueTinh = $('#tinh').val(); 
        $.ajax({
           url: "{{route('diachi.getQuanHuyen')}}", 
           type: "GET",
           data: {id_tinh:$('#tinh').val()},
           success: function(item) {
            // {maqh: 490, name: 'Quận Liên Chiểu', type: 'Quận', matp: '48'}
                // item.maqh GỌI VỚI OBJECT 
            //[{maqh: 490, name: 'Quận Liên Chiểu', type: 'Quận', matp: '48'},
            //{maqh: 492, name: 'Quận Hải Châu', type: 'Quận', matp: '48'}]
            //item.forEach(function(bien)){ bien.maqh bien.name bien.type bien.matp}
                var html = '';
                item.forEach(function(huyen){
                    html += '<option value="'+huyen.maqh+'"> '+huyen.name+'</option>';
                })
                $('#quanhuyen').html(html);
           }
        });
    }
    function getQh(){
        var valueQuanHuyen = $('#quanhuyen').val(); 
        console.log(valueQuanHuyen);
        $.ajax({
            url: "{{ route('diachi.getPhuongxa')}}",
            type: "GET",
            data: {id_quanhuyen:$('#quanhuyen').val()},
            success: function(item1) {
                var html1='';
                console.log(item1); 
                item1.forEach(function(phuong){
                    html1 += '<option value="'+phuong.xaid+'"> '+phuong.name+'</option>';
                })
                $('#phuongxa').html(html1);

        }
    });

    }
</script>
@endsection
