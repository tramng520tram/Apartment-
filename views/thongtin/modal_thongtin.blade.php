<div class="modal fade" id="thongtin_thanhtoan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xác nhận thanh toán</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <form action="{{route('thanhtoan.thanhtoanthanhcong')}}" method="POST" class="form">
              @csrf 
             
                  <div class="col-md-12 d-flex justify-content-center" >
                      <input type="hidden" name="id_thongtindatphong" id="id_thongtindatphong">
                    </div>
                    <div>
                      <label for="">Nhập tiền nhận từ khách hàng</label>
                      <input  class="form-control" type="text" name="tien_nhan" placeholder="Nhập tiền nhận từ khách hàng">
                    </div>
                  
                         
                    <div class="col-md-12 mt-2 d-flex justify-content-center" style="justify-content:space-between !important;">
                      <button type="submit" class="btn btn-primary mr-2">Đồng ý</button>
                      <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal" >Đóng</button>

                   
                    </div>
                      
                  </div>
              </div>
          </form>
              
      </div>

    </div>
  </div>
</div>