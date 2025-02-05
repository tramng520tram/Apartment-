
<?php $__env->startSection('title'); ?>
    Thêm tầng
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                            <form action="<?php echo e(route('tang.themtangPost')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
        
<?php $__env->stopSection(); ?>



<?php echo $__env->make('trangchu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS FX506L\OneDrive\Desktop\quanlychungcu_2\resources\views/tang/themtang.blade.php ENDPATH**/ ?>