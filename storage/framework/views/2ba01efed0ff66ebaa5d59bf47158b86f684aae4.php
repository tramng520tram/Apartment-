
<?php $__env->startSection('title'); ?>
    Danh sách
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <style>
        .home-blog {
          
            padding-bottom: 80px;
        }

        .media-body {
            width: 300px;
        }

        @media (min-width: 992px) {
            .home-blog {
            
                padding-bottom: 100px;
            }
        }

        .home-blog .section-title {
            padding-bottom: 15px;
        }

        .home-blog .media {
            margin-top: 50px;
        }

        @media (min-width: 768px) {
            .home-blog .media {
                margin-top: 30px;
            }
        }

        .bg-sand {
            background-color: white;
        }

        .media.blog-media {
            margin-top: 30px;
            position: relative;
            display: block;
        }

        @media (min-width: 992px) {
            .media.blog-media {
                display: table;
            }
        }

        .media.blog-media .circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            white-space: nowrap;
            position: absolute;
            padding: 0;
            top: 20px;
            left: 20px;
            text-align: center;
            box-shadow: none;
            transform: translateX(0);
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .media.blog-media .circle .day {
            color: #fff;
            transition: color 0.25s ease;
            font-weight: 500;
            font-size: 28px;
            line-height: 1;
            margin-top: 12px;
        }

        .media.blog-media .circle .month {
            text-transform: uppercase;
            font-size: 14px;
        }

        .media.blog-media>a {
            position: relative;
            display: block;
        }

        @media (min-width: 992px) {
            .media.blog-media>a {
                display: table-cell;
                vertical-align: top;
                min-width: 200px;
            }
        }

        @media (min-width: 1200px) {
            .media.blog-media>a {
                min-width: 230px;
            }
        }

        /* .media.blog-media>a:before {
            position: absolute;
            content: "";
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            opacity: 0;
            transform: scale(0);
            transition: transform 0.3s ease, opacity 0.3s;
            background: rgba(12, 198, 82, 0.7);
        } */

        .media.blog-media>a img {
            width: 100%;
        }

        .media.blog-media:hover>a:before {
            opacity: 1;
            transform: scale(1);
        }

        .media.blog-media:hover .circle {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .media.blog-media:hover .circle .day,
        .media.blog-media:hover .circle .month {
            color: #222;
        }

        

        .media.blog-media .media-body {
            border: 1px solid #efeff3;
            padding: 30px 30px 10px;
            font-size: 14px;
            background: #fff;
            border-top: none;
        }

        @media (min-width: 992px) {
            .media.blog-media .media-body {
                padding: 15px 20px 10px;
                border-top: 1px solid #efeff3;
                border-left: none;
                display: table-cell;
                vertical-align: top;
            }
        }

        @media (min-width: 1200px) {
            .media.blog-media .media-body {
                padding: 30px 20px 10px;
            }
        }

        .media.blog-media .media-body h5 {
            transition: color 0.3s ease;
            margin-bottom: 15px;
        }

        @media (min-width: 992px) {
            .media.blog-media .media-body h5 {
                font-size: 15px;
            }
        }

        @media (min-width: 1200px) {
            .media.blog-media .media-body h5 {
                margin-bottom: 15px;
                font-size: 18px;
            }
        }

        .media.blog-media .media-body a.post-link {
            display: block;
            color: #222;
            font-size: 11px;
            padding: 23px 0;
            text-transform: uppercase;
            font-weight: 400;
        }

        @media (min-width: 992px) {
            .media.blog-media .media-body a.post-link {
                padding: 7px 0;
            }
        }

        @media (min-width: 1200px) {
            .media.blog-media .media-body a.post-link {
                padding: 23px 0;
            }
        }

        .media.blog-media .media-body ul {
            position: relative;
            padding: 10px 0 0;
        }

        .media.blog-media .media-body ul li {
            display: inline-block;
            width: 49%;
            position: relative;
        }

        .media.blog-media .media-body ul li:before {
            position: absolute;
            content: "";
            top: 5px;
            left: 0;
            width: 1px;
            height: 14px;
            background: #eeeef2;
        }

        .media.blog-media .media-body ul li:first-child:before {
            visibility: hidden;
        }

        .media.blog-media .media-body ul:before {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: #eeeef2;
        }

        #exTab1 .tab-content {

            padding: 5px 15px;
        }

        #exTab2 h3 {
            color: white;
            background-color: #b7d9f7;
            padding: 5px 15px;
        }

        #exTab1 .nav-pills>li>a {
            border-radius: 0;
            margin-left: 50px;

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
                            <div class="col-12 hee">
                                <!-- title trang -->
                                Danh sách phòng
                            </div>
                            

                            <div id="exTab1" class="container">
                                <ul class="nav nav-pills" style="background: #ffffff;">
                                    <li class="active">
                                        <a href="#1a" data-toggle="tab" style="" >Phòng trống</a>
                                    </li>
                                    <li><a href="#2a" data-toggle="tab">Yêu cầu duyệt</a>
                                    </li>
                                    <li><a href="#3a" data-toggle="tab">Đã đặt phòng</a>
                                    </li>
                                    <li><a href="#4a" data-toggle="tab">Phòng bảo trì</a>
                                    </li>
                                </ul>
                                <?php
                                    use App\Models\phong;
                                ?>
                                <div class="tab-content clearfix">

                                    <div class="tab-pane active" id="1a">
                                        <div class="card-body px-0 pt-0 pb-2">

                                            <section class="home-blog bg-sand">
                                                <div class="container">

                                                    <!-- section title ends -->
                                                    <div class="row ">
                                                        <?php $__currentLoopData = $phong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $showphong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($showphong->status == phong::NULL): ?>
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="media blog-media shadow">

                                                                        <a href="blog-post-left-sidebar.html"><img
                                                                                class="d-flex  align-items-center"
                                                                                src="<?php echo e(asset('storage/' . $showphong->img)); ?>"
                                                                                alt="Generic placeholder image"></a>
                                                                        <div class="media-body ">
                                                                            <a href="">
                                                                                <h5 class="mt-0">
                                                                                    <?php echo e($showphong->tenphong); ?></h5>
                                                                            </a>
                                                                            <p>Loại phòng:
                                                                                <b><?php echo e($showphong->name_loaiphong->tenloaiphong); ?></b>
                                                                            </p>
                                                                            <p>Tầng:
                                                                                <b><?php echo e($showphong->name_tang->name); ?></b>
                                                                            </p>
                                                                            <p>Giá phòng: <b><?php echo e(number_format($showphong->giaphong, 0, '.', ',')); ?> </b>
                                                                            </p>
                                                                            <p>Trạng thái phòng:
                                                                                <?php if($showphong->status == phong::NULL): ?>
                                                                                    <div class="bg-secondary  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Phòng rỗng
                                                                                    </div>
                                                                                <?php elseif($showphong->status == phong::ORDER): ?>
                                                                                    <div class="bg-success  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Đã đặt phòng
                                                                                    </div>
                                                                                <?php elseif($showphong->status == phong::REQUEST): ?>
                                                                                    <div class="bg-warning  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Yêu cầu đặt phòng
                                                                                    </div>
                                                                                <?php elseif($showphong->status == phong::CANCEL): ?>
                                                                                    <div class="bg-danger  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Bảo trì                                                                                    </div>
                                                                                <?php endif; ?>
                                                                            </p>


                                                                            
                                                                            <button type="button"
                                                                                class="w-100 btn post-link text-center text-white pt-2 pb-2"
                                                                                style="border-radius:20px; background-color:#008375;"
                                                                                onclick="ThemPhong(<?php echo e($showphong->id); ?>)">
                                                                                Đặt phòng
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>
                                            </section>

                                        </div>

                                    </div>
                                    <div class="tab-pane" id="2a">
                                        <div class="card-body px-0 pt-0 pb-2">

                                            <section class="home-blog bg-sand">
                                                <div class="container">

                                                    <!-- section title ends -->
                                                    <div class="row ">
                                                        <?php $__currentLoopData = $phong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $showphong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($showphong->status == phong::REQUEST): ?>
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="media blog-media shadow">

                                                                        <a href="blog-post-left-sidebar.html"><img
                                                                                class="d-flex  align-items-center"
                                                                                src="<?php echo e(asset('storage/' . $showphong->img)); ?>"
                                                                                alt="Generic placeholder image"></a>
                                                                        <div class="media-body ">
                                                                            <a href="">
                                                                                <h5 class="mt-0">
                                                                                    <?php echo e($showphong->tenphong); ?></h5>
                                                                            </a>
                                                                            <p>Loại phòng:
                                                                                <b><?php echo e($showphong->name_loaiphong->tenloaiphong); ?></b>
                                                                            </p>
                                                                            <p>Tầng:
                                                                                <b><?php echo e($showphong->name_tang->name); ?></b>
                                                                            </p>
                                                                            <p>Giá phòng: <b><?php echo e(number_format($showphong->giaphong, 0, '.', ',')); ?>

                                                                                </b>
                                                                            </p>
                                                                            <p>Trạng thái phòng:
                                                                                <?php if($showphong->status == phong::NULL): ?>
                                                                                    <div class="bg-secondary  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Phòng rỗng
                                                                                    </div>
                                                                                <?php elseif($showphong->status == phong::ORDER): ?>
                                                                                    <div class="bg-success  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Đã đặt phòng
                                                                                    </div>
                                                                                <?php elseif($showphong->status == phong::REQUEST): ?>
                                                                                    <div class="bg-warning  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Yêu cầu đặt phòng
                                                                                    </div>
                                                                                <?php elseif($showphong->status == phong::CANCEL): ?>
                                                                                    <div class="bg-danger  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Bảo trì                                                                                    </div>
                                                                                <?php endif; ?>
                                                                            </p>


                                                                            
                                                                            <button type="button"
                                                                            class="w-100 btn post-link text-center text-white pt-2 pb-2"
                                                                            style="border-radius:20px; background-color:#008375;"
                                                                                onclick="Duyet(<?php echo e($showphong->id); ?>)">
                                                                                DUYỆT YÊU CẦU<U></U>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="3a">
                                        <div class="card-body px-0 pt-0 pb-2">

                                            <section class="home-blog bg-sand">
                                                <div class="container">

                                                    <!-- section title ends -->
                                                    <div class="row ">
                                                        <?php $__currentLoopData = $phong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $showphong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($showphong->status == phong::ORDER): ?>
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="media blog-media shadow">

                                                                        <a href="blog-post-left-sidebar.html"><img
                                                                                class="d-flex  align-items-center"
                                                                                src="<?php echo e(asset('storage/' . $showphong->img)); ?>"
                                                                                alt="Generic placeholder image"></a>
                                                                        <div class="media-body ">
                                                                            <a href="">
                                                                                <h5 class="mt-0">
                                                                                    <?php echo e($showphong->tenphong); ?></h5>
                                                                            </a>
                                                                            <p>Loại phòng:
                                                                                <b><?php echo e($showphong->name_loaiphong->tenloaiphong); ?></b>
                                                                            </p>
                                                                            <p>Tầng:
                                                                                <b><?php echo e($showphong->name_tang->name); ?></b>
                                                                            </p>
                                                                            <p>Giá phòng: <b><?php echo e(number_format($showphong->giaphong, 0, '.', ',')); ?>

                                                                                </b>
                                                                            </p>
                                                                            <p>Trạng thái phòng:
                                                                                <?php if($showphong->status == phong::NULL): ?>
                                                                                    <div class="bg-secondary  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Phòng rỗng
                                                                                    </div>
                                                                                <?php elseif($showphong->status == phong::ORDER): ?>
                                                                                    <div class="bg-success  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Đã đặt phòng
                                                                                    </div>
                                                                                <?php elseif($showphong->status == phong::REQUEST): ?>
                                                                                    <div class="bg-warning  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Yêu cầu đặt phòng
                                                                                    </div>
                                                                                <?php elseif($showphong->status == phong::CANCEL): ?>
                                                                                    <div class="bg-danger  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Bảo trì                                                                                    </div>
                                                                                <?php endif; ?>
                                                                            </p>


                                                                            
                                                                            <button type="button"
                                                                            class="w-100 btn post-link text-center text-white pt-2 pb-2"
                                                                            style="border-radius:20px; background-color:#008375;"
                                                                                onclick="DuyetDat(<?php echo e($showphong->id); ?>)">
                                                                                Duyệt hủy phòng
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="4a">
                                        <div class="card-body px-0 pt-0 pb-2">

                                            <section class="home-blog bg-sand">
                                                <div class="container">

                                                    <!-- section title ends -->
                                                    <div class="row ">
                                                        <?php $__currentLoopData = $phong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $showphong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($showphong->status == phong::CANCEL): ?>
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="media blog-media shadow">

                                                                        <a href="blog-post-left-sidebar.html"><img
                                                                                class="d-flex  align-items-center"
                                                                                src="<?php echo e(asset('storage/' . $showphong->img)); ?>"
                                                                                alt="Generic placeholder image"></a>
                                                                        <div class="media-body ">
                                                                            <a href="">
                                                                                <h5 class="mt-0">
                                                                                    <?php echo e($showphong->tenphong); ?></h5>
                                                                            </a>
                                                                            <p>Loại phòng:
                                                                                <b><?php echo e($showphong->name_loaiphong->tenloaiphong); ?></b>
                                                                            </p>
                                                                            <p>Tầng:
                                                                                <b><?php echo e($showphong->name_tang->name); ?></b>
                                                                            </p>
                                                                            <p>Giá phòng: <b><?php echo e(number_format($showphong->giaphong, 0, '.', ',')); ?>

                                                                                </b>
                                                                            </p>
                                                                            <p>Trạng thái phòng:
                                                                                <?php if($showphong->status == phong::NULL): ?>
                                                                                    <div class="bg-secondary  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Phòng rỗng
                                                                                    </div>
                                                                                <?php elseif($showphong->status == phong::ORDER): ?>
                                                                                    <div class="bg-success  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Đã đặt phòng
                                                                                    </div>
                                                                                <?php elseif($showphong->status == phong::REQUEST): ?>
                                                                                    <div class="bg-warning  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Yêu cầu đặt phòng
                                                                                    </div>
                                                                                <?php elseif($showphong->status == phong::CANCEL): ?>
                                                                                    <div class="bg-danger  text-white text-center"
                                                                                        style="border-radius:20px; ">
                                                                                        Bảo trì                                                                                    </div>
                                                                                <?php endif; ?>
                                                                            </p>

                                                                           
                                                                            <button type="button" 
                                                                            class="w-100 btn post-link text-center text-white pt-2 pb-2"
                                                                            style="border-radius:20px; background-color:#008375;"
                                                                                onclick="Baotri(<?php echo e($showphong->id); ?>)"
                                                                                <?php if($showphong->status == phong::ORDER): ?> disabled <?php endif; ?>>
                                                                                Bảo trì
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Modal -->
    <?php echo $__env->make('list.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('list.modal_duyet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('list.modal_duyetdat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('list.modal_baotri', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            var table = new DataTable("table");
        });

        function ThemPhong(id) {

            $('#id_phong').val(id);
            $('#exampleModal').modal('show');
        }

        function Duyet(id) {

            $('#id_phong_duyet').val(id);
            $('#exampleModal1').modal('show');
        }

        function Baotri(id){
            $('#id_phong_duyet_2').val(id);
            $('#exampleModal3').modal('show');
        }

        function HuyPhong() {
            $.ajax({
                url: "<?php echo e(route('thongtin.huyphong_post')); ?>",
                method: "POST",
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    "id_phong": $('#id_phong_duyet').val()
                },
                success: function(data) {
                    $('#exampleModal1').modal('hide');
                    window.location.reload();
                }
            });

        }

        function DuyetDat(id) {
            $('#id_phong_duyet_1').val(id);
            $('#exampleModal2').modal('show');
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('trangchu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS FX506L\OneDrive\Desktop\quanlychungcu_2\resources\views/list/list.blade.php ENDPATH**/ ?>