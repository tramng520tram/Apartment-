@extends('trangchu')
@section('title')
    Thống kê doanh thu theo tuần  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
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
                      <form action="{{Route('doanhthu.thongketuan')}}" method="GET">
                        <div class="col-6">
                          
                          <label for="week">Chọn tuần</label>
                        </div>
                          <div class="row">
                          <div class="col-6">
                            <input type="week" id="week" class="form-control" name="week" onchange="getTuan()">
                          </div>
                          <div class="col-6">
                          <button class="btn btn-primary" style="background-color: #008375">Lấy dữ liệu</button>
                          </div>
                        
                        </div>
                      </form>
                          
                       
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-5">
                            <!-- body trang -->
                            <div class="container">
                                <canvas id="myChart" ></canvas>
                              </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
<script>
    let myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật'],
        datasets:[{
          label:'Population',
          data: @json($thanhtoanByDayValues), //json_encode - json_decode biến mảng string về lại mảng ban đầu

       
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)'
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Báo cáo doanh thu theo tuần',
          fontSize:25
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
</script>

@endsection