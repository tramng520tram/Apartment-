@extends('kh.khachhang1')
@section('title')
    Giới thiệu
@endsection
@section('css')
    <style>
        h1{
    font-size: 30px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    justify-content: center;
}
hr{
    color: #008375;
}

.pt{
    font-weight: bold;
}
.col-6{
    display: flex;
    float: left;
}
.table-info td:first-child {

    font-family:'Trebuchet MS','Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 17px;
    color: #008375;
    font-weight: bold;
    width: 30%;
    vertical-align: top;
}
.table-info td:last-child {
    width: 70%;
    font-size: 16px;
    color: #1b1b1b;
    vertical-align: center;
}
.hr1 {
    width: 100px;
    z-index: 999;
    font-weight: 700;
    color: #008375;
    border: 2px solid;
}
.hr2 {
    font-weight: 700;
    color: #e2e2e2;
    border: 0.1px solid;
}
.appsLand-btn {
    background: #008375;
}
img{
   
    border-radius: 5px;
}
.col-md-6{
    padding-bottom: 30px;
}
.overlay-button {
    height: 60px;
    width: 244px;
    position: absolute;
    top: 84%;
    left: 20%;
    transform: translate(-50%, -50%);
    background-color: #008375;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
/* button {
    background: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(255, 255, 255, 0.5));
    border: 0;
    font-size: 12px;
} */

.overlay {
    border-radius: 5px;
    position: absolute;
    top: 0;
    left: 105px;
    width: 610px;
    height: 550px;
    /* background: linear-gradient(to right, rgba(48, 46, 46, 0.5), rgba(80, 154, 141, 0.5)); */
}
.btn-outline-secondary{
    border: #aeb3b1 1px solid;
    height: 50px;
    width: 200px ;
    
}
.btn-outline-secondary:hover{
    border: #008375 1px solid;
   
}
.s031__text ul li:before {
    content: "\f04b";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    display: inline-block;
    margin-left: 0.7em;
    width: 1.3em;
    font-size: 12px;
    line-height: 40px;
    color: #008375;
}
.button-view:hover{
    cursor: pointer;
    color: #008375;
}
    </style>
@endsection
@section('content')
<div class="container-fluid" style="background-color: #ffffff">
    {{-- About --}}
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <hr class="hr2">
        </div>
        <div class="col-md-1"></div>

    </div><br>
    <div class="row">
        <h1>Ý tưởng dự án</h1> <br><br>
        <div class="container ">
            <p style="text-align: center; align-items:center; font-size: 16px;">
                Đối diện với dòng sông Sài Gòn tuyệt đẹp và chỉ cách Nhà hát lớn nổi tiếng, đường Đồng Khởi và phố Lê Thánh Tôn để mua sắm, ăn uống và giải trí, PPW - Masteries, khách sạn 5 sao được yêu thích nhất tại Thành phố Hồ Chí Minh, kết hợp vẻ đẹp tự nhiên và sự sang trọng tuyệt đối để mang đến những điều tốt nhất cho du khách sành điệu. Khung cảnh nghỉ dưỡng ngoạn mục và nội thất kiến trúc đặc biệt của nó mang lại cảm giác sang trọng và yên tĩnh BẠN CÓ MUỐN THÊM DOANH NGHIỆP CỦA BẠN
            </p>
        </div> <br><br>
    </div>
    <div class="row " style="text-align: center;align-items: center">
        <button type="button" class="btn btn-outline-secondary"><p class="ptext" style="font-size: 18px;">Khu vực</p></button>
    </div> <br><br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <hr class="hr2">
        </div>
        <div class="col-md-1"></div>

    </div><br>

    {{-- About --}}
    <h1 style="margin-top:25px;margin-bottom:45px;">Thông tin dự án</h1>
    {{-- <div class="row" style="margin-top: -55px;margin-bottom: 35px; margin-left: 691px;">
        <hr class="hr1">

    </div> --}}
    <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-5">
        <table class="table-info">
            <tbody>
                    <td>Tổng diện t&iacute;ch đất:</td>
                    <td>79,839 m&sup2; (gần 8ha)</td><br><br>
                </tr>
                <tr>
                    <td>Quy m&ocirc; dự &aacute;n:</td>
                    <td>
                    4 to&agrave; th&aacute;p đ&ocirc;i căn hộ cao từ 41 đến 45 tầng, 1 t&ograve;a nh&agrave; Căn hộ - Dịch Vụ - Thương Mại cao 44 tầng v&agrave; khu TTTM Vincom Mega Mall Thảo Điền
                    </td>
                </tr>
                <tr>
                    <td>Mật độ x&acirc;y dựng:</td>
                    <td>34,74%</td>
                </tr>
                <tr>
                    <td>Kh&ocirc;ng gian xanh:</td>
                    <td>60% (bao gồm hồ điều h&ograve;a, c&ocirc;ng vi&ecirc;n, lối đi bộ, lưu th&ocirc;ng, s&acirc;n vườn, hồ bơi&hellip;)</td>
                </tr>
                <tr>
                    <td>Diện t&iacute;ch căn hộ linh hoạt:</td>
                    <td>45-100 m&sup2;</td>
                </tr>
                <tr>
                    <td>Thời gian x&acirc;y dựng:</td>
                    <td>Từ Qu&yacute; I/2014</td>
                </tr>
                <tr>
                    <td>Dự kiến ho&agrave;n th&agrave;nh:</td>
                    <td>Đến Qu&yacute; IV/2016</td>
                </tr>
                <tr>
                    <td>H&igrave;nh thức sở hữu căn hộ:</td>
                    <td>Vĩnh viễn</td>
                </tr>
                <tr>
                    <td>C&aacute;c loại h&igrave;nh căn hộ:</td>
                    <td>1 Ph&ograve;ng ngủ &nbsp;<br />2 Ph&ograve;ng ngủ&nbsp;<br />3 Ph&ograve;ng ngủ<br />Căn hộ gh&eacute;p diện t&iacute;ch linh hoạt<br />Shophouse<br />Căn hộ Duplex<br />Penthouse</td>
                </tr>
            </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <div class="img-box">
            <img src="{{asset('./assets/img/back.png')}}" style=" height: 550px; opacity: 0.9; margin-left: 90px; width: 610px;">
            <div class="overlay"></div>
            {{-- <button class="overlay-button">Your Button</button> --}}
          </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <hr class="hr2">
        </div>
        <div class="col-md-1"></div>
    </div><br>
    <div class="row">
        <h1>Cơ sở vật chất</h1> <br><br>
        <div class="container ">
            <p style="text-align: center; align-items:center; font-size: 16px;">
            </p>
        </div> <br><br>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <img src="{{asset('./assets/img/csvc.jpg')}}" alt="" style="box-shadow: 0px 0px 5px 5px #cac5c5;width: 200%; height: 380px">
        </div>
        <div class="col-md-6">
            <div class="s031__text" style="margin-top: 80px ">
                <div class="s031__eyebrow text--dotline"></div>
                <h2 class="s031__headline text--dotline">TIỆN NGHI</h2> <br>
                <ul>
                    <li>Khu vực thư giãn sang trọng nhất</li>
                    <li>Hồ bơi khách sạn ngoài trời rộng nhất, đẹp nhất tại TP.HCM</li>
                    <li>Trung tâm thể dục được trang bị thiết bị tập thể dục hiện đại</li>
                    <li>Ấn tượng với các nhà trị liệu giàu kinh nghiệm tại Legend Healing Spa</li>
                </ul><br>
                <div class="s031__cta">
                    <a data-target="_self" class="button-view">
                        <span>View more ></span>
                    </a>
                </div>
                
            </div>
        </div>
    </div>

  </div>
  


@endsection

@section('js')

@endsection

