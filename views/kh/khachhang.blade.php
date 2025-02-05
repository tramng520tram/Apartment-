<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <title>@yield('title')</title>
        <link rel="shortcut icon" type="image/icon" href="{{asset('./assets/logo/favicon.png')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/linearicons.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/bootsnav.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/style.css')}}">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="{{ asset('./assets/css/nucleo-svg.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        @yield('css')

    </head>
	<style>
        h2,a{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body{
            background:#eee;
        }
        .single_advisor_profile {
            position: relative;
            margin-bottom: 50px;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            z-index: 1;
            border-radius: 15px;
            -webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
            box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
        }
        .advisor_thumb {
            position: relative;
            z-index: 1;
            border-radius: 15px 15px 0 0;
            margin: 0 auto;
            padding: 30px 30px 0 30px;
            background-color: #5d9182;
            overflow: hidden;
        }
        .advisor_thumb::after {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            position: absolute;
            width: 150%;
            height: 80px;
            bottom: -45px;
            left: -25%;
            content: "";
            background-color: #ffffff;
            -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
        }
        @media only screen and (max-width: 575px) {
            .advisor_thumb::after {
                height: 160px;
                bottom: -90px;
            }
        }
        .social-info {
            position: absolute;
            z-index: 1;
            width: 100%;
            bottom: 0;
            right: 30px;
            text-align: right;
        }
        .single_advisor_details_info {
            position: relative;
            z-index: 1;
            padding: 30px;
            text-align: right;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            border-radius: 0 0 15px 15px;
            background-color: #ffffff;
        }
        .single_advisor_details_info::after {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            position: absolute;
            z-index: 1;
            width: 50px;
            height: 3px;
            background-color: #5d9182;
            content: "";
            top: 12px;
            right: 30px;
        }
        .single_advisor_details_info h6 {
            margin-bottom: 0.25rem;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .single_advisor_details_info h6 {
                font-size: 14px;
            }
        }
       .single_advisor_details_info p {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            margin-bottom: 0;
            font-size: 14px;
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .single_advisor_profile .single_advisor_details_info p {
                font-size: 12px;
            }
        }
        .single_advisor_profile:hover .advisor_thumb::after,
        .single_advisor_profile:focus .advisor_thumb::after {
            background-color: #769d8b;
        }
        .single_advisor_profile:hover .single_advisor_details_info,
        .single_advisor_profile:focus .single_advisor_details_info {
            background-color: #769d8b;
        }
        .single_advisor_profile:hover .single_advisor_details_info::after,
        .single_advisor_profile:focus .single_advisor_details_info::after {
            background-color: #ffffff;
        }
        .single_advisor_profile:hover .single_advisor_details_info h6,
        .single_advisor_profile:focus .single_advisor_details_info h6 {
            color: #ffffff;
        }
        .single_advisor_profile:hover .single_advisor_details_info p,
        .single_advisor_profile:focus .single_advisor_details_info p {
            color: #ffffff;
        }
        /*Class Yoga Club*/
        .detail-col-club{
            padding-bottom: 10px;
        }
        .best-class-club-desc {
            background-color: #f5f5f5;
            padding: 60px 15px;
            height: 500px;
        }
        .club-section-title {
            font-family: 'Roboto Slab', serif;
            font-size: 28px;
            line-height: 40px;
            color: #008375;
            font-weight: 600;
            text-align: left;
        }
        .best-class-club-desc ul {
            list-style: none;
            padding: 0;
            margin: 20px 0 13px;
        }
        .best-class-club-desc ul li {
            padding-left: 1.3em;
            margin-bottom: 10px;
        }
        .best-class-club-desc ul li:before {
            content:"\f04b";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            display: inline-block;
            margin-left: -1.3em; 
            width: 1.3em;
            font-size: 12px;
            line-height: 40px;
            color: #008375; 
        }
        .best-class-club-img {
            background-image: url({{ asset('./assets/img/hoboi.jpg') }});
            background-size: cover;
            background-position: center right;
            background-repeat: no-repeat;
            padding-top: 250px;
            padding-bottom: 250px;
            padding-left:0;
            padding-right:0;
        }
        /* yoga club */
        .single-list-topics-content:hover {
            color: #fff;
            background: #008375;
            box-shadow: 0 5px 10px rgba(71,71,71,.4);
        }
        .appsLand-btn {
    position: absolute;
    top: 0;
    right: 0;
    background: #008375;
    display: inline-block;
    width: 180px;
    height: 60px;
    line-height: 60px;
    text-decoration: none;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    text-transform: capitalize;
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    border: 0;
    overflow: hidden;
    cursor: pointer;
    -webkit-transition: 0.3s ease-in-out;
    -moz-transition: 0.3s ease-in-out;
    -o-transition: 0.3s ease-in-out;
    transition: 0.3s ease-in-out;
}
    </style>
	<body>
        {{-- Phần đầu trang: Liên hệ, đăng nhập, đăng ký --}}
		<header id="header-top" class="header-top">
			<ul>
				<li class="head-responsive-right pull-right">
					<div class="header-top-right">
						<ul>
							<li class="header-top-contact">
								+1 222 777 6565
							</li>
							<li class="header-top-contact">
								<a href="#">sign in</a>
							</li>
							<li class="header-top-contact">
								<a href="#">register</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</header>
        {{-- Phần đầu trang: Liên hệ, đăng nhập, đăng ký --}}

        {{--Star Navbar --}}
		@include('kh.navbar')
        {{--End Navbar --}}
		 
        {{-- Star Hình + Thanh tìm kiếm --}}
		@include('kh.search')
        {{-- End Hình + Thanh tìm kiếm --}}

        {{-- Star 5 cột --}}
		<section id="list-topics" class="list-topics">
			<div class="container">
				<div class="list-topics-content">
					<ul>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="fa-solid fa-utensils"></i>
								</div>
								<h2><a href="#">Dịch vụ ăn uống</a></h2>
								<p>Coffe House, Buffet</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
                                    <i class="fa-solid fa-person-swimming"></i>
								</div>
								<h2><a href="#">Hồ bơi</a></h2>
								<p>Tầng thượng</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
                                    <i class="fa-solid fa-wifi"></i>
								</div>
								<h2><a href="#">Wifi</a></h2>
								<p>Truy cập mọi nơi</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
                                    <i class="fa-solid fa-car"></i>
								</div>
								<h2><a href="#">Giữ xe</a></h2>
								<p>Không gian rộng</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
                                    <i class="fa-solid fa-shield-halved"></i>
								</div>
								<h2><a href="#">An ninh</a></h2>
								<p>Camera, giám sát</p>
							</div>
						</li>
					</ul>
				</div>
			</div>  
		</section> 
        {{-- End 5 cột --}}

        {{-- Star dịch vụ ăn uống --}}
		<section id="works" class="works">
			<div class="container">
				<div class="section-header">
					<h2>Dịch vụ ăn uống</h2>
					<p>Phục vụ buffet ăn sáng, cửa hàng coffe với không gian yên tĩnh, thoáng mát.</p>
				</div> 
                <br>
                <div class="container">
                    <div class="row">
                         {{-- Star buffer sáng --}}
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="advisor_thumb" ><img style="border-radius: 10px; height: 250px; width:250px;" src="{{asset('./assets/img/bf1.png')}}" alt="">
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="single_advisor_details_info">
                                    <h6>Buffet Sáng</h6>
                                    <p class="designation">Đa dạng món ăn</p>
                                </div>
                            </div>
                        </div>
                        {{-- End buffer sáng --}}

                        
                        <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Team Thumb-->
                    <div class="advisor_thumb" ><img style="border-radius: 10px; height: 250px; width:250px;" src="{{asset('./assets/img/bf.png')}}" alt="">
                        <!-- Social Info-->
                        <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <!-- Team Details-->    
                    <div class="single_advisor_details_info">
                        <h6>Buffet Sáng</h6>
                        <p class="designation">Đa dạng món ăn</p>
                    </div>
                    </div>
                </div>
                <!-- Single Advisor-->
                <!-- Single Advisor-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Team Thumb-->
                    <div class="advisor_thumb" ><img style="border-radius: 10px; height: 250px; width:250px;" src="{{asset('./assets/img/cf.jpg')}}" alt="">
                        <!-- Social Info-->
                        <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <!-- Team Details-->
                    <div class="single_advisor_details_info">
                        <h6>Buffet Sáng</h6>
                        <p class="designation">Đa dạng món ăn</p>
                    </div>
                    </div>
                </div>
                <!-- Single Advisor-->
                <!-- Single Advisor-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Team Thumb-->
                    <div class="advisor_thumb" ><img style="border-radius: 10px; height: 250px; width:250px;" src="{{asset('./assets/img/mark.jpg')}}" alt="">
                        <!-- Social Info-->
                        <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <!-- Team Details-->
                    <div class="single_advisor_details_info">
                        <h6>Buffet Sáng</h6>
                        <p class="designation">Đa dạng món ăn</p>
                    </div>
                    </div>
                </div>
                <!-- Single Advisor-->
                    
            {{-- Star dịch vụ ăn uống --}}
                        </div> 
                    </section>
	
        <div class="best-class-club">
            <div class="row best-class-sections-detail">
              <div class="col-lg-6 best-class-club-desc">
                <div class="row">
                  <div class="col-lg-4">
                    
                  </div>
                  <div class="col-lg-8 detail-col-club">
                    <h2 class="club-section-title">Địa điểm Check-in không thể bỏ qua</h2>
                    <p>PPW - Masteries sở hữu hồ bơi vô cực nằm trên tầng thượng với view sông Sài Gòn tuyệt đẹp. Bạn có thể đến đây vào mọi thời gian trong ngày, nhưng đẹp nhất là khoảnh khắc vừa ngâm mình trong làn nước mát, vừa ngắm hoàng hôn trên sông Sài Gòn.</p>
                    <ul>
                      <li><b>Giá vé:</b></li>
                      <li><i>Trẻ em: 300.000 VNĐ</i></li>
                      <li><i>Người lớn: 650.000 VNĐ</i></li>
                    </ul>
                    <p>Khách sạn từng được tờ The New York Times nhắc đến trong danh sách các địa điểm lưu trú lý tưởng khi đi du lịch tại TPHCM.</p>
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-6 best-class-club-img">
    
              </div>
            </div>
          </div>

 

        {{-- Star blog --}}
        <section id="blog" class="blog mt-2" >
			<div class="container">
				<div class="blog-content">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog-item">
                                <div class="single-blog-item-img">
                                    <img style="height: 260px; width:359px;" src="{{asset('./assets/img/qr.jpg')}}" alt="blog image">
                                </div>
                                <div class="single-blog-item-txt">
                                    <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                                    <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog-item">
                                <div class="single-blog-item-img">
                                    <img style="height: 260px; width:359px;" src="{{asset('./assets/img/pc.jpg')}}" alt="blog image">
                                </div>
                                <div class="single-blog-item-txt">
                                    <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                                    <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog-item">
                                <div class="single-blog-item-img">
                                    <img style="height: 260px; width:359px;" src="{{asset('./assets/img/lt.jpg')}}" alt="blog image">
                                </div>
                                <div class="single-blog-item-txt">
                                    <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                                    <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</section>
		

	
		<section id="contact"  class="subscription">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						do you want to add your business listing with us?
					</h2>
					<p>
						Listrace offer you to list your business with us and we very much able to promote your Business.
					</p>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="subscription-input-group">
							<form action="#">
								<input type="email" class="subscription-input-form" placeholder="Enter your email here">
								<button class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
									creat account
								</button>
							</form>
						</div>
					</div>	
				</div>
			</div>

		</section><!--/subscription-->	
		<!--subscription end -->

		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="footer-menu">
		           	<div class="row">
			           	<div class="col-sm-3">
			           		 <div class="navbar-header">
				                <a class="navbar-brand" href="index.html"><img src="" alt=""></a>
				            </div><!--/.navbar-header-->
			           	</div>
			           	<div class="col-sm-9">
			           		<ul class="footer-menu-item">
			                    <li class="scroll"><a href="#works">how it works</a></li>
			                    <li class="scroll"><a href="#explore">explore</a></li>
			                    <li class="scroll"><a href="#reviews">review</a></li>
			                    <li class="scroll"><a href="#blog">blog</a></li>
			                    <li class="scroll"><a href="#contact">contact</a></li>
			                    <li class=" scroll"><a href="#contact">my account</a></li>
			                </ul>
			           	</div>
		           </div>
				</div>
				<div class="hm-footer-copyright">
					<div class="row">
						<div class="col-sm-5">
							<p>
								&copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
							</p>
						</div>
						<div class="col-sm-7">
							<div class="footer-social">
								<span><i class="fa fa-phone"> +1  (222) 777 8888</i></span>
								<a href="#"><i class="fa fa-facebook"></i></a>	
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
					
				</div>
			</div>

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
			</div>
        </footer>
		<script src="assets/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/bootsnav.js"></script>
        <script  src="assets/js/feather.min.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>