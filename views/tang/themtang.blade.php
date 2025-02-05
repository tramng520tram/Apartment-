@extends('trangchu')
@section('title')
    Thêm tầng
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
                        Thêm tầng
                        </div>
                       
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-5">
                            <!-- body trang -->
                            <form action="{{route('tang.themtangPost')}}" method="POST">
                                @csrf
                                <div class="container">
                                    <div class="col-12">
                                    <div class="form-group">
                                            <label class="emailaddress" for="exampleInputEmail1">Tên tầng</label>
                                            <input required name='name' type="text" class="form-control" placeholder="">
                                        </div>
                                    
                                        <div class="sub">
                                        <button type="submit" class="btn " style="background-color:#008375; color:aliceblue ">Thêm</button>
                                        </div>
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
        
@endsection


