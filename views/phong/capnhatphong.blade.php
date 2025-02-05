@extends('trangchu')
@section('title')
    Trang chủ
@endsection
@section('css')
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
                                Cập nhật phòng
                            </div>

                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-5">
                            <!-- body trang -->
                            <form action="{{ route('phong.updatePost') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" value="{{ $capnhatphong->id }}" name="id">
                                            <input type="text" name="tenloaiphong" class="form-control"
                                                id="exampleFormControlInput1" value="{{ $capnhatphong->tenloaiphong }}">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn" style="background-color:#008375; color:aliceblue "    >Lưu</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
