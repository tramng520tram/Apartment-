<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vui lòng cung cấp thông tin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <form action="{{route('thongtin.thongtindatphong_post')}}" method="POST" class="form">
              @csrf 
              <div class="container">
                  <div class="col-md-12">
                      <input type="hidden" name="id_phong" id="id_phong">
                      <div class="form-group">
                          <label class="emailaddress" for="exampleInputEmail1">Họ và tên</label>
                          <input required name='hoten' type="text" class="form-control" placeholder="">
                      </div>
                      <div class="form-group">
                          <label class="emailaddress" for="exampleInputEmail1">Số điện thoại liên lạc</label>
                          <input required name='sdt' type="text" class="form-control" placeholder="">
                      </div>
                      <div class="form-group">
                        <label class="emailaddress" for="exampleInputEmail1">Gmail</label>
                        <input required name='gmail' type="text" class="form-control" placeholder="">
                    </div>
                      <div class="form-group">
                          <label for="example-date-input" class="form-control-label">Ngày tháng năm sinh</label>
                          <input class="form-control" type="date" name="ngaysinh"  id="example-date-input">
                      </div>  
                    <div class="form-group">
                        <label class="emailaddress" for="exampleInputEmail1">Số chứng minh nhân dân</label>
                        <input required name='cmnd' type="text" class="form-control" placeholder="">
                    </div>   
                     <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="example-date-input" class="form-control-label">Ngày nhận</label>
                          <input class="form-control" name="ngaynhan" type="date"  id="example-date-input">
                      </div> 
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="example-date-input" class="form-control-label">Ngày trả</label>
                            <input class="form-control" type="date" name="ngaytra"  id="example-date-input">
                        </div> </div>  
                    </div>           
                      <div class="sub">
                      <button type="submit" class="btn btn-primary" style="margin-left: 550px;">Thêm</button>
                      </div>
                      <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal" style="margin-left: 650px;margin-top: -86px;" >Đóng</button>
                  </div>
              </div>
          </form>
              
      </div>
        {{-- <button type="button" class="btn bg-gradient-primary">Lưu thông tin</button> --}}
    </div>
  </div>
</div>