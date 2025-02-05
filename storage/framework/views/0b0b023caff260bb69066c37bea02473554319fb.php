

<?php $__env->startSection('title'); ?>
    Quản lý người dùng
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <style>
        body {
	background-color: #efefef;
	align-items: center;
	color: #333;
	font-family: "Roboto";
	font-weight: 400;
	margin: 0;
}

.container {
	margin-top: 5%;
}

a,
a:hover,
a:focus,
a:active {
	color: #333;
	outline: medium none;
	text-decoration: none;
}

.btn.active.focus,
.btn.active:focus,
.btn.focus,
.btn.focus:active,
.btn:active:focus,
.btn:focus {
	outline: medium none;
}

#ribbon {
	background: #fff none repeat scroll 0 0;
	box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);
	font-weight: 400;
	padding: 15px;
	position: fixed;
	right: -269px;
	text-align: center;
	top: -125px;
	transform: rotate(45deg);
	transform-origin: 0 0 0;
	width: 500px;
	
	i {
		font-size: 21px;
		padding-right: 5px;
		vertical-align: middle;
	}
}


.dataTable-sorter::before {
    bottom: 8px;
}
.dataTable-sorter::after {
    top: 8px;
}

.selected {
	td {
		background-color: #27ae60;
		color: #fff;
	}
}
.fa-solid{
        color: #008375;
        margin-left: 10px;
    }
    .p-5 {
        margin-top: -57px;
    padding: 3rem !important;
}
    
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-5">
                           <!-- title trang -->
                           Quản lý người dùng

                        </div>
                        <div class="col-7">
                        <a href="<?php echo e(route('trangchu.dangky')); ?>">
                            <i class="fa-solid fa-square-plus" style="margin-left: 500px;" ></i> Thêm người dùng 
                            </a>
                        <a href="<?php echo e(route('trangchu.TrangChu')); ?>">
                            <i class="fa-solid fa-circle-left" style="margin-top:10px;margin-bottom: -10px; margin-left: 500px;"></i>  Trở về
                        </a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive ">
                            <!-- body trang -->
                            <div class="container">
	<div class="row">
		<div class="col-md-12">
          
			<table class="table" >
	<thead>
		<tr>
			<!-- <th>Name</th>
			<th>Ext.</th>
			<th>City</th>
			<th data-type="date" data-format="YYYY/MM/DD">Start Date</th>
			<th>Completion</th> -->
            <th>STT</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>CCCD</th>
            <th>SĐT</th>
            <th>Giới tính</th>
            <th>Quyền</th>
            <th>Thao tác</th>
		</tr>
	</thead>
	<tbody>
        <?php
            use App\Models\User;
            ?>
        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Nguoidung): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($Nguoidung->name); ?></td>
            <td><?php echo e($Nguoidung->email); ?></td>
            <td><?php echo e($Nguoidung->CCCD); ?></td>
            <td><?php echo e($Nguoidung->SDT); ?></td> 

            <!-- <td><?php echo e($Nguoidung->GioiTinh); ?></td>   -->
            <td>
                <?php if($Nguoidung->GioiTinh == 'male'): ?>
                    Nam
                <?php else: ?>
                    Nữ
                <?php endif; ?>
            </td>
            
            <td>
                <?php if($Nguoidung->role_id == User::ADMIN): ?>
                Quản trị viên 
                <?php elseif($Nguoidung->role_id == User::LETAN): ?>
                Nhân Viên
                <?php elseif($Nguoidung->role_id == User::KHACHHANG): ?>
                Nhân Viên
                <?php endif; ?>
            </td>
            
            <td>
                <a href="<?php echo e(route('user.update',['id' => $Nguoidung->id])); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="<?php echo e(route('user.delete',['id' => $Nguoidung->id])); ?>"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<!-- <tr><td>Unity Pugh</td><td>9958</td><td>Curicó</td><td>2005/02/11</td><td>37%</td></tr> -->
		
	</tbody>
</table>
		</div>
	</div>
</div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function(){
        $('#myTable').DataTable();
         var table = new DataTable("table");
    });
   
  </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('trangchu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS FX506L\OneDrive\Desktop\quanlychungcu_2\resources\views/user/index.blade.php ENDPATH**/ ?>