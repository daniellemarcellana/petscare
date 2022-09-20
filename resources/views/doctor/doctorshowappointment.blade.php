<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
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
     @include('doctor.sidebar')
      <!-- partial -->
     @include('doctor.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
             <div class="float-right">

            <form action="{{url('search')}}" method="get">

                <input type="text" class="float-left text-dark py-2 rounded my-3 mx-2" placeholder=" Search by Name " name="searchTerm" />
                <a class="btn btn-success float-left py-2 my-3"><input type="submit" class="btn" value="Search"></a>
            </form>

                <table>
                    <tr  align="center" style="background-color: rgb(36, 158, 206);">
                        <th style="padding: 10px;">Name</th>
                        <th style="padding: 10px;">Email</th>
                        <th style="padding: 10px;">Phone</th>
                        <th style="padding: 10px;">Doctor</th>
                        <th style="padding: 10px;">Message</th>
                        <th style="padding: 10px;">Date</th>
                        <th style="padding: 10px;">Status</th>
                        <th colspan="2" style="padding: 10px; text-align: center;">Actions</th>
                         <th style="padding: 10px;">Email</th>
                    </tr>
                    @foreach ($data as $appoint)

                    <tr align="center" style="background-color: white; color: black;">
                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->message}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->status}}</td>
                        <td><a class="btn btn-success" href="{{url('approved', $appoint->id)}}">Approved</a></td>
                        <td><a class="btn btn-danger" href="{{url('cancelled', $appoint->id)}}">Cancelled</a></td>
                        <td><a class="btn btn-primary" href="{{url('emailview', $appoint->id)}}">Send Mail</a></td>


                    </tr>

                    @endforeach

                </table>

            </div>


        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')
  </body>
</html>
