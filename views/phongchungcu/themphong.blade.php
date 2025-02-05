@extends('trangchu')
@section('title')
   Thêm phòng
@endsection
@section('css')
    <style>
 .file-wrapper{
            width: 200px;
            height: 200px;
            border: 10px solid gray;
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
                        <div class="col-6">
                           <!-- title trang -->
                        Thêm phòng
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-5">
                            <!-- body trang -->
                       <form action="{{route('phongchungcu.luuphong')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="file-wrapper">
                                    <input type="file" name="upload-img" accept="image/*" />
                                    <div class="close-btn">×</div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tên phòng</label>
                                    <input required  type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Tầng</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="id_tang">
                                <option value="">Chọn tầng</option>
                                    @foreach($tang as $sotang)
                               
                                    <option value="{{$sotang->id}}">{{$sotang->name}}</option>
                                    @endforeach
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Giá phòng</label>
                                <input type="text" class="form-control" name="giaphong">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Loại phòng</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="id_loaiphong">
                                <option value="">Chọn loại phòng</option>
                                    @foreach($loaiphong as $loai)
                                    
                                    <option value="{{$loai->id}}">{{$loai->tenloaiphong}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            @php
                                use App\Models\phong;
                            @endphp
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Trạng thái</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="status">
                                    <option value="">Chọn Trạng thái</option>
                                    <option value="{{phong::NULL}}">Phòng trống</option>
                                    <option value="{{phong::ORDER}}" >Đã đặt phòng</option>
                                    <option value="{{phong::REQUEST}}">Yêu cầu đặt phòng</option>
                                    <option value="{{phong::CANCEL}}">Yêu cầu hủy phòng</option>
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Tình trạng</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="active">
                                    <option value="">Chọn tình trạng</option>
                                    <option value="{{phong::ACTIVE}}">Đang hoạt động</option>
                                    <option value="{{phong::UNACTIVE}}">Ngưng hoạt động</option>
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Nội dung</label>
                                <textarea required class="form-control" name="noidung" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button class="btn-primary" type="submit" style="background-color: #008375; border-radius:20px; padding:5px 10px; color:white; witdh:50px;">
                                    Lưu
                                </button>
                            </div>
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
        </script>
@endsection