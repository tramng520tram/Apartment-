<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" {{route('trangchu.TrangChu')}} " target="_blank">
        <img src="{{asset('./assets/img/pond.png')}}" class="navbar-brand-img h-100"ss>
        <span class="ms-1 font-weight-bold">QUẢN LÍ KHÁCH SẠN</span>
      </a>
    </div>
    <hr style="color: #008375;margin-top: -10px;">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main" style="height: 100vh;">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('trangchu.TrangChu')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-house" style="color: #008375	; font-size:15px; margin-bottom: 8px; margin-left:1px;"></i>
            </div>
            <span class="nav-link-text ms-1">Trang chủ</span>
          </a>
        </li>
        @if(auth()->user()->role_id==1)
        <li class="nav-item">
          <a class="nav-link " href="{{route('user.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-user" style="color: #008375; font-size:15px; margin-bottom: 8px; margin-left:1px;"></i>
            </div>
            <span class="nav-link-text ms-1">Quản lý người dùng</span>
          </a>
        </li> 
        @endif
        @if(auth()->user()->role_id==1)
        <li class="nav-item">
          <a class="nav-link " href="{{route('tang.dstang')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-building" style="color: #008375; font-size:15px; margin-bottom: 8px; margin-left:1px;"></i>
            </div>
            <span class="nav-link-text ms-1">Quản lý tầng</span>
          </a>
        </li>
        @endif
        @if(auth()->user()->role_id==1)
        <li class="nav-item">
          <a class="nav-link " href="{{route('phong.dsphong')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-person-shelter " style="color: #008375; font-size:15px; margin-bottom: 8px; margin-left:1px;"></i>
            </div>
            <span class="nav-link-text ms-1">Quản lý loại phòng</span>
          </a>
        </li> 
        @endif
        @if ( auth()->user()->role_id==1) 
        <li class="nav-item">
          <a class="nav-link " href="{{route('phongchungcu.danhsach')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-door-open" style="color: #008375; font-size:15px; margin-bottom: 8px; margin-left:1px;"></i>
            </div>
            <span class="nav-link-text ms-1">Quản lý phòng</span>
          </a>
        </li>
        @endif            
        @if(auth()->user()->role_id==2 || auth()->user()->role_id==1)
        <li class="nav-item">
          <a class="nav-link " href="{{route('list.danhsach')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-table-list " style="color: #008375; font-size:15px; margin-bottom: 8px; margin-left:1px;"></i>
            </div>
            <span class="nav-link-text ms-1">Danh sách phòng</span>
          </a>
        </li>
        @endif            
        @if(auth()->user()->role_id==2 || auth()->user()->role_id==1)
        <li class="nav-item">
          <a class="nav-link " href="{{route('thanhtoan.thongtinthanhtoan')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-address-card " style="color: #008375; font-size:15px; margin-bottom: 8px; margin-left:1px;"></i>
            </div>
            <span class="nav-link-text ms-1">Thanh toán</span>
          </a>
        </li>
        @endif
        @if(auth()->user()->role_id==2 || auth()->user()->role_id==1)
        <li class="nav-item">
          <a class="nav-link " href="{{route('doanhthu.thongke')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-chart-column" style="color: #008375; font-size:15px; margin-bottom: 8px; margin-left:1px;"></i>
            </div>
            <span class="nav-link-text ms-1">Thống kê</span>
          </a>
        </li>   
        @endif

        {{-- @if (auth()->user()->role_id == 2) 
            <li class="nav-item">
              <a class="nav-link " href="{{route('baitap.bt1')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-chart-column" style="color: #008375; font-size:15px; margin-bottom: 8px; margin-left:1px;"></i>
                </div>
                <span class="nav-link-text ms-1">Bài tập</span>
              </a>
            </li>
        @endif
      
        <li class="nav-item">
          <a class="nav-link " href="{{route('baitap.bt2')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-chart-column" style="color: #008375; font-size:15px; margin-bottom: 8px; margin-left:1px;"></i>
            </div>
            <span class="nav-link-text ms-1">Bài tập 2</span>
          </a>
        </li> --}}
      </ul>
    </div>
    
  </aside>