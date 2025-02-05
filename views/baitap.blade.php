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
                    {{-- <input type="text" id="input1" onkeyup="tinhtong()"> --}}
                    {{-- <input type="text" id="input2">
                    <select onchange="select()" name="" id="selectchon">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select> --}}
                    {{-- <button type="submit" onclick="luu()">Lưu</button>                     --}}
                    <button onclick="giam()">-</button>
                    <input type="text" value="1" id="input3">
                    <button onclick="tang()">+</button>
                    <button onclick="tinhtien()">Thanh toan</button>
                </div>
               <div id="ketqua">
               </div>
            </div>
        </div>
    </div>
</div> 

@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@section('js')

        <script>
            function tinhtien(){
                var g = 100000;
                var a = $('#input3').val();
                var inta = parseInt(a);
                var sum = inta*g;
                $('#ketqua').html(sum);
            }

            function tang(){
                var a = $('#input3').val();
                var inta = parseInt(a);
                $('#input3').val(inta+1);
                // $('#input3').val(''); 
            }
            function giam(){
                var a = $('#input3').val();
                var inta = parseInt(a);
                if(a>1){
                    $('#input3').val(inta-1);

                }
                else{
                $('#input3').val(1);

                }
                // $('#input3').val(''); 
            }

          function luu(){
            var ip = $('#input1').val();
            var ip2 = $('#input2').val();
            console.log(ip+ip2);
            let int1=parseInt(ip);
            let int2=parseInt(ip2);
            console.log(int1+int2);

            var ketqua = int1+int2;
            $('#ketqua').html(ketqua);
          }

          function tinhtong(){
            var ip = $('#input1').val();
            var ip2 = $('#input2').val();

            console.log(ip+ip2);
            let int1=parseInt(ip);
            let int2=parseInt(ip2);
            console.log(int1+int2);

            var ketqua = int1+int2;
            $('#ketqua').html(ketqua); 
          }

          function select(){
            // alert('1');
            var chon = $('#selectchon').val();
            // alert(chon);
            var ip2 = $('#input2').val();
            let int2=parseInt(ip2);
            let chon2=parseInt(chon);

            var kq=chon2+int2;
            console.log(kq);

          }
        </script>
@endsection