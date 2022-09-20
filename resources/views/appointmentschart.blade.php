<!DOCTYPE html>
<html>
<head>
    @include('admin.css')

    <title>High Chart Example</title>
</head>
<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
          <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
              <div class="ps-lg-1">
                <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                  <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                <button id="bannerClose" class="btn border-0 p-0">
                  <i class="mdi mdi-close text-white me-0"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
       @include('admin.sidebar')
        <!-- partial -->
       @include('admin.navbar')
       @include('admin.script')

       <div class="container-fluid page-body-wrapper">


        <div id="container" style="width: 1600px"></div>
        <div class="float-right" style="width: 10600px">
            <div id="highchart" style="padding-top: 200px"></div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script type="text/javascript">
                $(function () {
                    var dataAppointments = {{ json_encode($datas,JSON_NUMERIC_CHECK) }};
                    $('#highchart').highcharts({
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: 'Monthly Appointments'
                        },
                        xAxis: {
                            categories: ['January','Febuary','March','April','May','June','July','August','September','October','November','December']
                        },
                        yAxis: {
                            title: {
                                text: 'Number of Appointments'
                            }
                        },
                        series: [{
                            name: 'Appointments',
                            data: dataAppointments
                        }]
                    });
                });
            </script>


        </div>


    </div>


</body>
</html>
