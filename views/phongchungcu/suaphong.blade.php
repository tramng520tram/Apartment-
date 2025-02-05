@extends('trangchu')
@section('title')
   Thêm phòng
@endsection
@section('css')
<style>
    .center {
/* height:100%; */
display:flex;
/* align-items:center; */
/* justify-content:center; */
}
.form-input {
width:250px;
padding:20px;
background:#fff;
/* border:2px dashed #555; */
}
.form-input input {
display:none;
}
.form-input label {
display:block;
width:70%;
/* height:50px; */
line-height:35px;
text-align:center;
/* background:#333; */
color:#fff;
font-size:13px;
font-family:"Open Sans",sans-serif;
text-transform:Uppercase;
font-weight:600;
border-radius:10px;
cursor:pointer;
}

.form-input img {
width:100%;
height: 200px;
display:none;
margin-top:10px;
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
                        Sửa phòng
                        </div>
                       
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-5">
                            <!-- body trang -->
                       <form action="{{route('phongchungcu.capnhat')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-md-6">
                            <div class="center">
                                <div class="form-input">
                                    <input type="file" name="upload-img" id="file-ip-1" accept="image/*" onchange="UploadFlashSale(event);">
                                    <div class="preview">
                                        <img id="file-ip-1-preview" src="{{asset('storage/'.$suaphong->img )}}" style="display:block;">
                                    </div>
                                    <label for="file-ip-1" class="bg-primary mt-2">
                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                        Tải ảnh
                                    </label>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                           
                        </div>
                            <input type="hidden" name="id_phong" value="{{$suaphong->id}}">
                   
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tên phòng</label>
                                    <input required  type="text" name="tenphong" class="form-control" value="{{$suaphong->tenphong}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Tầng</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="id_tang" >
                                <option >Chọn tầng</option>
                                    @foreach($tang as $sotang)
                                        @if($suaphong->id_tang == $sotang->id)
                                            <option value="{{$sotang->id}}" selected>{{$sotang->name}}</option>
                                        @else
                                            <option value="{{$sotang->id}}">{{$sotang->name}}</option>
                                        @endif
                                    @endforeach
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Giá phòng</label>
                                <input type="text" class="form-control" name="giaphong" value="{{$suaphong->giaphong}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Loại phòng</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="id_loaiphong">
                                <option value="">Chọn loại phòng</option>
                                    @foreach($loaiphong as $loai)
                                    @if($suaphong->id_loaiphong == $loai->id)
                                    <option value="{{$loai->id}} " selected>{{$loai->tenloaiphong}} </option>
                                    @else
                                    <option value="{{$loai->id}} " >{{$loai->tenloaiphong}} </option>
                                    @endif
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            @php
                                use App\Models\phong;
                            @endphp
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Status</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="status">
                                    <option value="">Chọn Status</option>
                                    <option value="{{phong::NULL}}"
                                    @if($suaphong->status == phong::NULL)
                                        selected
                                    @endif>Phòng trống</option>

                                    <option value="{{phong::ORDER}}" 
                                    @if($suaphong->status == phong::ORDER)
                                        selected
                                    @endif>Đã đặt phòng</option>

                                    <option value="{{phong::REQUEST}}"
                                    @if($suaphong->status == phong::REQUEST)
                                        selected
                                    @endif>Yêu cầu đặt phòng</option>

                                    <option value="{{phong::CANCEL}}"
                                    @if($suaphong->status == phong::CANCEL)
                                        selected
                                    @endif>Yêu cầu hủy phòng</option>
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Active</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="active">
                                    
                                    <option value="{{phong::ACTIVE}}">Đang hoạt động</option>
                                    <option value="{{phong::UNACTIVE}}">Ngưng hoạt động</option>
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Nội dung</label>
                                <textarea required class="form-control" name="mota" rows="3" value="{{$suaphong->mota}}">{{$suaphong->mota}}</textarea>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button class="btn-primary" type="submit" style="background-color:#008375; border-radius:20px; padding:5px 10px; color:white; witdh:50px;">
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
    
    function UploadFlashSale(event){
    
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
  

        </script>
@endsection