<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>In hóa đơn | PPw masteries
    </title>
    <style>

    </style>
</head>

<body>
    <div class="container" style="font-family: 'Times New Roman', Times, serif">
        <div class="col-md-12">
            <input type="hidden" name="id_phong" id="id_inhoadon">
            <div class="row" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <h2>PPw Masteries</h2>
                <p><b>Địa chỉ:</b>159 Xa lộ Hà Nội, P. Thảo Điền, Thành phố Thủ Đức</p>
                <hr style=" border: 1px solid #000000; width: 300px;">
                <p><b>PHIẾU THANH TOÁN</b></p>
                <P><B>Số hóa đơn:</B>123456</P>
            </div>
        </div>
        <div class="row">
            <div class="col-6" style=" margin-left: 130px">
                <p><b>Thời gian:</b>20/11/2023</p>
                <p><b>Khách hàng:</b> {{ $thanhtoan->tennguoidat->hoten }}</p>
                <p><b>Nhân Viên:</b> Quản trị viên</p>
            </div>
        </div>
        <div class="row">
            <table class="table table-sm" style="width: 70%;  margin-left: 140px">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Khách hàng</th>
                        <th scope="col">Phòng</th>
                        <th scope="col">Dịch vụ</th>
                        <th scope="col">Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @php
                            use Carbon\Carbon;
                            use App\Models\thanhtoan;
                        @endphp

                        <th scope="row">1</th>
                        <td>{{ $thanhtoan->tennguoidat->hoten }}</td>
                        <td>{{ $thanhtoan->tenphong->tenphong }}</td>
                        <td>Không</td>
                        <td>{{ number_format($thanhtoan->giatien) }}</td>



                    </tr>

                </tbody>
            </table>
        </div>
        <div class="container" style="margin-left: 110px">
            <div class="row">
                <div class="col-6">
                    <b>Khuyễn mãi:</b>
                </div>
                <div class="col-6" style="padding-left: 220px;">
                    <p>{{ number_format($thanhtoan->giakhuyenmai ?? 0) }}
                        @if ($thanhtoan->hinhthuckhuyenmai == '1')
                            %
                        @else
                            VNĐ
                        @endif
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Phụ thu:</b>
                </div>
                <div class="col-6" style="padding-left: 220px;">
                    <p>{{ number_format($thanhtoan->giaphuthu ?? 0) }}
                        @if ($thanhtoan->hinhthucphuthu == '1')
                            %
                        @else
                            VNĐ
                        @endif
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Tổng tiền:</b>
                </div>
                <div class="col-6" style="padding-left: 170px;">
                    <p>
                        @php
                            $tongtien = 0;
                            if ($thanhtoan->hinhthuckhuyenmai == '1') {
                                $tongtien = $thanhtoan->giatien + ($thanhtoan->giaphuthu ?? 0) - (($thanhtoan->giatien + ($thanhtoan->giaphuthu ?? 0)) * ($thanhtoan->giakhuyenmai ?? 0)) / 100;
                            } else {
                                $tongtien = $thanhtoan->giatien - ($thanhtoan->giakhuyenmai ?? 0) + ($thanhtoan->giaphuthu ?? 0);
                            }
                        @endphp
                        {{ number_format($tongtien) }} / VNĐ
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Tiên nhận:</b>
                </div>
                <div class="col-6" style="padding-left: 170px;">
                    <p>
                        {{ number_format($thanhtoan->tiennhan) }} / VNĐ
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Tiên hoàn trả:</b>
                </div>
                <div class="col-6" style="padding-left: 170px;">
                    <p>
                        {{ number_format(abs($tongtien - $thanhtoan->tiennhan)) }} / VNĐ
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">

                </div>
                <div class="col-6" style="padding-left: 70px;">
                    <p>
                        @php
                            function readNumber($number)
                            {
                                $ones = [
                                    0 => 'không',
                                    1 => 'một',
                                    2 => 'hai',
                                    3 => 'ba',
                                    4 => 'bốn',
                                    5 => 'năm',
                                    6 => 'sáu',
                                    7 => 'bảy',
                                    8 => 'tám',
                                    9 => 'chín',
                                ];

                                $tens = [
                                    10 => 'mười',
                                    20 => 'hai mươi',
                                    30 => 'ba mươi',
                                    40 => 'bốn mươi',
                                    50 => 'năm mươi',
                                    60 => 'sáu mươi',
                                    70 => 'bảy mươi',
                                    80 => 'tám mươi',
                                    90 => 'chín mươi',
                                ];

                                if ($number < 10) {
                                    return $ones[$number];
                                } elseif ($number < 100) {
                                    return $tens[10 * floor($number / 10)] . ($number % 10 !== 0 ? ' ' . $ones[$number % 10] : '');
                                } elseif ($number < 1000) {
                                    return $ones[floor($number / 100)] . ' trăm' . ($number % 100 !== 0 ? ' ' . readNumber($number % 100) : '');
                                }
                            }

                            $number = number_format($tongtien, 0, ',', '.');
                            $number_in_words = readNumber($number);

                        @endphp
                        {{ $number_in_words }} (Việt Nam đồng)
                    </p>
                </div>
            </div><br>
            {{-- <div class="row">
            <div class="col-6">
                <b>Tiền khách trả:</b>
            </div>
            <div class="col-6" style="padding-left: 170px;">
                <p>500.000 vnd</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <b>Thối lại:</b>
            </div>
            <div class="col-6" style="padding-left: 198px;">
                <p>0.000 vnd</p>
            </div>
        </div> --}}
        </div>

    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>

<script>
    window.print();
</script>
