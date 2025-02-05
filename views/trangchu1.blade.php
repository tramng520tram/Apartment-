@extends('trangchu')
@section('title')
    Trang chủ
@endsection
@section('css')
<style>
  .col-12.trangchu{
    text-align: center;
   background: radial-gradient(circle, #b2eed8, #ffffff, #ffffff);
  }
  .underlined-text{
    font-size: 40px;
    /* font-family: 'Font Name', 'Libre Baskerville', 'serif'; */
    font-family: 'Libre Baskerville', serif;
    font-weight: 600;
}
    .hr{
    border: 1px solid #ffffff;
    width: 100px;
    margin: 0 auto;
    margin-top: -12px;
    }
  /* card */
  .section {
    padding: 100px 0;
    position: relative;
}
.gray-bg {
    background-color: #ebf4fa;
}
/* Blog 
---------------------*/
.blog-grid {
  margin-top: 15px;
  margin-bottom: 15px;
}
.blog-grid .blog-img {
  position: relative;
  border-radius: 5px;
  overflow: hidden;
}
.blog-grid .blog-img .date {
  position: absolute;
  background: #3a3973;
  color: #ffffff;
  padding: 8px 15px;
  left: 0;
  top: 10px;
  font-size: 14px;
}
.blog-grid .blog-info {
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  border-radius: 5px;
  background: #ffffff;
  padding: 20px;
  margin: -30px 20px 0;
  position: relative;
}
.blog-grid .blog-info h5 {
  font-size: 22px;
  font-weight: 500;
  margin: 0 0 10px;
}
.blog-grid .blog-info h5 a {
  color: #3a3973;
}
.blog-grid .blog-info p {
  margin: 0;
}
.blog-grid .blog-info .btn-bar {
  margin-top: 20px;
}

.px-btn-arrow {
    padding: 0 50px 0 0;
    line-height: 20px;
    position: relative;
    display: inline-block;
    color: #fe4f6c;
    -moz-transition: ease all 0.3s;
    -o-transition: ease all 0.3s;
    -webkit-transition: ease all 0.3s;
    transition: ease all 0.3s;
}


.px-btn-arrow .arrow {
    width: 13px;
    height: 2px;
    background: currentColor;
    display: inline-block;
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    right: 25px;
    -moz-transition: ease right 0.3s;
    -o-transition: ease right 0.3s;
    -webkit-transition: ease right 0.3s;
    transition: ease right 0.3s;
}

.px-btn-arrow .arrow:after {
    width: 8px;
    height: 8px;
    border-right: 2px solid currentColor;
    border-top: 2px solid currentColor;
    content: "";
    position: absolute;
    top: -3px;
    right: 0;
    display: inline-block;
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
.blog-info h5 a:hover{
    color: rgb(9, 255, 0) ;
}
#zoom-image:hover {
    cursor: pointer;
}
/* 
.col-6 img {
    position: relative; 
    transition: transform 0.2s; 
    z-index: 1;
}
.col-6 img:hover{
  
    transform: scale(1.3); 
   
} */
  /* card */
  .toast .toast-success{
    z-index: 9999;
  }
  .trangchu{
    font-family: 'Libre Baskerville', serif;
    font-family: 'Montserrat', sans-serif;
    font-size: 45px;
    font-weight: 650;
    margin-left: 23px;
    color: #000000
  }
  
  .trangchu2{
    font-family: 'Libre Baskerville', serif;
    font-family: 'Montserrat', sans-serif;
    font-size: 15px;
    font-weight: 650;
    margin-left: 23px;
    color: #343333;
  
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
                       <p class="trangchu"> Trang chủ</p>
                       <p class="trangchu2" style="margin-top: -17px; "> Trong khoảng thời gian 5 năm trở lại đây, khu đô thị Thảo Điền - An Khánh (quận 2) nói riêng và khu Đông TP Hồ Chí Minh
                             nói chung luôn là điểm nóng thu hút sự quan tâm đặc biệt của giới đầu tư nhà đất cả trong và ngoài nước,  với hàng chục dự án bất động sản cao cấp chen chân mọc lên dọc theo.</p>
                    </div>
                    
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-5">
                            <!-- body trang -->

                            {{-- start 1 --}}
                            <div class="row">
                                <div class="col-6">
                                    <img src="{{asset('./assets/img/12.png')}}" style="border-radius:10px; height: 450px; width: 450px; box-shadow:10px 10px 20px 0px rgba(181 181 181);" id="zoom-image">
                                </div>
                                <div class="col-6"><br>
                                    <div class="row">
                                         <p  style="display: inline-block;margin: 0 auto; margin-top:-30px; text-align: center; width:max-content; font-size: 20px; font-weight: bold; color: black">Thông tin dự án</p>
                                    </div>
                                    <div class="row">
                                        <hr style="border: 1px solid #003300; width: 100px; margin-left: 232px">
                                    </div><br>
                                    <div class="row">
                                       <div class="col-12">
                                        {{-- Thông tin dự án --}}
                                            <div class="row">
                                                <div class="col-5">
                                                    <h6>Tổng diện tích đất:	</h6>
                                                </div>
                                                <div class="col-7">
                                                    <p>79,839 m² (gần 8ha)
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5">
                                                    <h6>Quy mô dự án: </h6>
                                                </div>
                                                <div class="col-7">
                                                    <p>1 tòa Khách sạn - Dịch Vụ - Thương Mại cao 5 tầng và khu TTTM Mini Mart                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5">
                                                    <h6>Thời gian xây dựng:	 </h6>
                                                </div>
                                                <div class="col-7">
                                                    <p>Từ Quý I/2014                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5">
                                                    <h6>Dự kiến hoàn thành:	</h6>
                                                </div>
                                                <div class="col-7">
                                                    <p>Đến Quý IV/2016	                                                   </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5">
                                                    <h6>Mật độ xây dựng:	</h6>
                                                </div>
                                                <div class="col-7">
                                                    <p>34,74%
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5">
                                                    <h6>Không gian xanh:	</h6>
                                                </div>
                                                <div class="col-7">
                                                    <p>60% (bao gồm hồ điều hòa, công viên, lối đi bộ, lưu thông, sân vườn, hồ bơi…)</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5">
                                                    <h6>Diện tích căn hộ linh hoạt:</h6>
                                                </div>
                                                <div class="col-7">
                                                    <p>45-100 m²
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5">
                                                    <h6>Các loại hình căn hộ:	</h6>
                                                </div>
                                                <div class="col-7">
                                                    <p> Phòng ngủ đơn - 
                                                        Phòng ngủ đôi -
                                                        Phòng ngủ gia đình - 
                                                        Căn hộ Duplex
                                                        </p>
                                                </div>
                                            </div>
                                            
                                        {{-- Thông tin dự án --}}
                                       </div>
                                    </div>
                                </div>
                            </div><br><br>
                            {{-- end- 1 --}}

                            {{-- star vị trí --}}
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <p  style="margin-left:81px; font-size: 20px; font-weight: bold; color: black">Mặt bằng - Dịch vụ - Thương mại</p>
                                    </div>
                                    <div class="row">
                                        <hr style="border: 1px solid #003300; width: 100px; margin-left: 193px;margin-top:-12px;">
                                    </div>
                                    <div class="row">
                                        <p>Mặt bằng căn hộ được thiết kế thông thoáng và hợp lý với 04 loại căn hộ diện tích khác nhau.</p>
                                        <ul class="square" style="margin-left: 40px;">
                                            <li><img src="{{asset('./assets/img/xanhduong.png')}}" alt="" style="width:5%;">     Phòng đơn / 47,75m²</li><br>
                                            <li><img src="{{asset('./assets/img/nau.png')}}" alt="" style="width:5%;">     Phòng đôi / 63m² - 68m²</li><br>
                                            <li><img src="{{asset('./assets/img/hong.png')}}" alt="" style="width:5%;">     Phòng gia đình / 71,1m² - 71,3m²</li><br>
                                            <li><img src="{{asset('./assets/img/xanhla.png')}}" alt="" style="width:5%;">     Căn hộ Duplex / 71,1m² - 71,3m²</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="col-6">
                                    <img src="{{asset('./assets/img/vitri.jpg')}}" alt="">
                                </div>
                            </div>
                            {{-- end vị trí --}}

                            {{-- star Card --}}
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="blog-grid">
                                        <div class="blog-img">
                                            
                                            <a href="#">
                                                <img src="{{asset('./assets/img/13.jpg')}}" title="" alt="" style="width: 350px; height:250px;">
                                            </a>
                                        </div>
                                        <div class="blog-info">
                                            <h5><a href="#">Outside</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                            <div class="btn-bar">
                                                <a href="#" class="px-btn-arrow">
                                                    <span>Read More</span>
                                                    <i class="arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-grid">
                                        <div class="blog-img">
                                            
                                            <a href="#">
                                                <img src="{{asset('./assets/img/14.jpg')}}" title="" alt="" style="width: 350px; height:250px;">
                                            </a>
                                        </div>
                                        <div class="blog-info">
                                            <h5><a href="#">Mini mart</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                            <div class="btn-bar">
                                                <a href="#" class="px-btn-arrow">
                                                    <span>Read More</span>
                                                    <i class="arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-grid">
                                        <div class="blog-img">
                                           
                                            <a href="#">
                                                <img src="{{asset('./assets/img/15.jpg')}}" title="" alt="" style="width: 350px; height:250px;">
                                            </a>
                                        </div>
                                        <div class="blog-info">
                                            <h5><a href="#">Coffe & Cake</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                            <div class="btn-bar">
                                                <a href="#" class="px-btn-arrow">
                                                    <span>Read More</span>
                                                    <i class="arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- end Card --}}
                     
                            </div><br><hr style="margin-left:10px; margin-right:10px;border: 1px solid #000000;"><br>
                  

                            <p style="text-align: center; font-size: 20px; font-weight: bold; color: black">Tiến độ dự án</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-4">
                                        <p style="font-size: 35px;">2020</p>
                                           <div class="row">
                                                <div class="col-4">
                                                    <a href="">Tháng 10</a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="">Tháng 11</a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="">Tháng 12</a>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-4">
                                        <p style="font-size: 35px;">2021</p>
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="">Tháng 10</a><br><br>
                                                <a href="">Tháng 7</a><br><br>
                                                <a href="">Tháng 4</a><br><br>
                                                <a href="">Tháng 1</a>
                                            </div>
                                            <div class="col-4">
                                                <a href="">Tháng 11</a><br><br>
                                                <a href="">Tháng 8</a><br><br>
                                                <a href="">Tháng 5</a><br><br>
                                                <a href="">Tháng 2</a>
                                            </div>
                                            <div class="col-4">
                                                <a href="">Tháng 12</a><br><br>
                                                <a href="">Tháng 9</a><br><br>
                                                <a href="">Tháng 6</a><br><br>
                                                <a href="">Tháng 3</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <p style="font-size: 35px;">2022</p>
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="">Tháng 10</a><br><br>
                                                <a href="">Tháng 7</a><br><br>
                                                <a href="">Tháng 4</a><br><br>
                                                <a href="">Tháng 1</a>
                                            </div>
                                            <div class="col-4">
                                                <a href="">Tháng 11</a><br><br>
                                                <a href="">Tháng 8</a><br><br>
                                                <a href="">Tháng 5</a><br><br>
                                                <a href="">Tháng 2</a>
                                            </div>
                                            <div class="col-4">
                                                <a href="">Tháng 12</a><br><br>
                                                <a href="">Tháng 9</a><br><br>
                                                <a href="">Tháng 6</a><br><br>
                                                <a href="">Tháng 3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br><br>
                            
                            <p><b>159 Xa lộ Hà Nội, P. Thảo Điền, Thành phố Thủ Đức</b> - Website: www.PPw.com/masteri - Email: PPw@masterisehomes.com
                                Website chính thức của dự án PPw. © 2015 bản quyền thuộc về PPw. Tất cả các quyền được bảo hộ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

@endsection
@section('js')
        <script>
            document.getElementById("zoom-image").addEventListener("click", function() {
            this.style.transform = "scale(1.2)"; /* Phóng to hình ảnh lên 1.3 */
            this.style.transition = "transform 0.5s"; /* Thời gian phóng to */
            });
            document.getElementById("zoom-image").addEventListener("mouseout", function() {
            this.style.transform = "scale(1)"; /* Trả về kích thước ban đầu */
            this.style.transition = "transform 0.5s"; /* Thời gian trở về kích thước ban đầu */
    });

        </script>
@endsection