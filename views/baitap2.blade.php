@extends('trangchu')
@section('title')
    Trang chủ
@endsection
@section('css')
    
@endsection
@section('content')
 <div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-6">
                           <!-- title trang -->

                        </div>
                       
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div>
                        <div>
                            <label for="">Nhập giá tiền</label>
                            <input type="text" id="giatien" placeholder="giá tiền" onkeyup="gia()" >
                        </div>

                        <div>
                            <label for="">Nhập giá khuyến mãi</label>
                            <input type="text" id="giakhuyenmai" value="0">
                        </div>
             
                        <div>
                            <label for=""> % khuyen mãi</label>
                            <select name="" id="hinhthuc">
                                <option value="" selected>Chọn % khuyến mãi</option>
                                <option value="2">%</option>
                                <option value="3">VND</option>
                            </select>
                        </div>
                        <div>
                            <label for="">Voucher</label>
                            <input type="text" id="voucher">
                        </div>
                        <button onclick="thanhtoan()">Thành tiền</button>
                    </div>
                </div>
               <div id="ketqua">
               </div>
            </div>
        </div>
    </div>
</div> 

@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@section('js')

        <script>
            function thanhtoan() {
                
                var voucher =  $('#voucher').val();
                var ten = 'tram';   

                var khuyenmai = $('#giakhuyenmai').val();
                var gia = $('#giatien').val().replace(/[^0-9]/g, '');  
                var sum = 0;
                if(!gia){
                    gia=0;
                }
                console.log(gia);

                if(khuyenmai > 0){
                    var hinhthuckm = $('#hinhthuc').val();
                    if(hinhthuckm == 3){
                        sum=parseInt(gia)-parseInt(khuyenmai);
                    }
                    else{
                        sum=parseInt(gia)-(parseInt(gia)*parseInt(khuyenmai))/100;
                    }
                    if(voucher){
                        if(voucher==ten){
                            sum=parseInt(sum)-100000;
                        }
                        else{
                            sum=parseInt(sum);
                        }
                    }
                }
                else {
                    // sum = gia;
                    if(voucher){
                        if(voucher==ten){
                            sum=parseInt(gia)-100000;
                        }
                        else{
                            sum=parseInt(gia);
                        }
                    }
                }
                // console.log(sum);
                Swal.fire({
                title: "Có tiến hành thanh toán hóa đơn?",
                html: `
                    Số tiền `+sum+`
                `,

                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Save",
                denyButtonText: `Don't save`
                }).then((result) => {
               
                if (result.isConfirmed) {
                    $('#giatien').val('');
                    $('#voucher').val('');
                    $('#giakhuyenmai').val('0');
                    $('#hinhthuc').val('').trigger('change');


                    Swal.fire("Thanh toán thành công!", "", "success");

                } else if (result.isDenied) {
                    Swal.fire("Thanh toán thất bại", "", "info");
                }
                });


            }

            function gia(){
               
                var value = $('#giatien').val().replace(/[^0-9]/g, '');  
                const format = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',')
                // console.log(format);

                $('#giatien').val(format);
                // console.log(value);

                10,000,000

            }
        </script>
@endsection