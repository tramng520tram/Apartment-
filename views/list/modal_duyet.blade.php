<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Duyệt thông tin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('thongtin.duyetphong_post') }}" method="POST" class="form">
                    @csrf
                    <div class="container">
                        <div class="col-md-12">
                            <input type="hidden" name="id_phong" id="id_phong_duyet">
                            <img src="{{ asset('./assets/img/duyet.jpg') }}" style="width: 400px;" class="navbar-brand-img h-100"
                                alt="main_logo">
                          
                        </div>
                        <div class="col-md-12 d-flex justify-content-center" style="justify-content:space-between !important;">
                        <button type="submit" class="btn"
                            style="background-color:#008375; color:aliceblue ">Duyệt</button>
                        <a class="btn btn-primary" onclick="HuyPhong()">Hủy</a>
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Đóng</button>
                        </div>
                    </div>
            </div>
            </form>

        </div>
        {{-- <button type="button" class="btn bg-gradient-primary">Lưu thông tin</button> --}}
    </div>
</div>
</div>
