@extends('trangchu')
@section('title')
Trang chủ
@endsection
@section('css')
<style>
    .col-md-12{
       margin-left: 250px;
    
    }
    .col-6 {
        flex: 0 0 auto;
        width: 50%;
       
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
                        <div class="row" style="margin-left: 10px;">
                            <!-- title trang -->
                            Thay đổi mật khẩu
                            <form action="{{route('quen.thaydoimk')}}" method="POST">
                                @csrf
                                <div class="col-md-12">
                                    <input type="hidden" name="id" value="{{auth()->user()->id}}">
                                    <div class="col-6">
                                    <i class="fa-solid fa-key" style="color: #008375;"></i>
                                        <label for="">Mật khẩu cũ</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="matkhaucu">                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                    <i class="fa-solid fa-key" style="color: #008375;"></i>
                                        <label for="">Mật khẩu mới</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="matkhaumoi">                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                    <i class="fa-solid fa-unlock-keyhole" style="color: #008375;"></i>
                                        <label for="">Nhập lại mật khẩu</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="nhaplaimatkhau">                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-primary" type="submit" style=" padding:7px 10px; color:white; width:100%; background-color:#008375;">
                                            Lưu
                                        </button>
                                    </div>
                                </div>
                                
                                   
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-5">
                        <!-- body trang -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')

@endsection