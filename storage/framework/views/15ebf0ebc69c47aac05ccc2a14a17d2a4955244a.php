<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Trạng thái phòng</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <form action="<?php echo e(route('thongtin.huyphong_post')); ?>" method="POST" class="form">
                <?php echo csrf_field(); ?> 
                <div class="container">
                    <div class="col-md-12 d-flex justify-content-center" >
                        <input type="hidden" name="id_phong" id="id_phong_duyet_1">
                        <img src="<?php echo e(asset('./assets/img/2.png')); ?>" class="navbar-brand-img h-100" alt="main_logo">
                        
                      </div>           
                      <div class="col-md-12 d-flex justify-content-center" style="justify-content:space-between !important;">
                        <button type="submit" class="btn btn-primary mr-2" >Bảo trì</button>
                        <a href="<?php echo e(route('thanhtoan.thongtinthanhtoan')); ?>" class="btn btn-primary mr-2" onclick="ThanhToan()">Đưa vào thanh toán</a>
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal" >Đóng</button>
                      </div>
                        
                    </div>
                </div>
            </form>
                
        </div>
          
      </div>
    </div>
  </div><?php /**PATH C:\Users\ASUS FX506L\OneDrive\Desktop\quanlychungcu_2\resources\views/list/modal_duyetdat.blade.php ENDPATH**/ ?>