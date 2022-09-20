<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    <style type="text/css">

        label{
            display: inline-block;
            width: 200px;
        }

    </style>


    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Veterinary Clinic PH</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
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

        <div class="container-fluid page-body-wrapper">



           <div class="container" align="center" style="padding: 100px;">

            @if (session()->has('message'))

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert">
                    x
                </button>

                {{session()->get('message')}}

            </div>

            @endif
            <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card" style="background-color: white; color: black;">
                                <div class="card-body">
                                    <h3 class="card-title font-weight-bold" style="font-size:
                                        28px; color: black; text-align: left;"><i class="fas fa-plus"></i>Create New Doctor</h3>
                                    <p style="text-align: left;">Please fill out this form for adding a doctor.</p><hr>

                <form action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf


                    <div style="padding: 15px;">
                        <label>Doctor Name</label>
                        <input type="text" name="name" style="color: black" value="{{$data->name}}">
                    </div>

                    <div style="padding: 15px;">
                        <label>Address</label>
                        <input type="text" name="address" style="color: black" value="{{$data->address}}">
                    </div>

                    <div style="padding: 15px;">
                        <label>Email</label>
                        <input type="text" name="email" style="color: black" value="{{$data->email}}">
                    </div>

                    <div style="padding: 15px;">
                        <label>Phone</label>
                        <input type="text" name="phone" style="color: black" value="{{$data->phone}}">
                    </div>


                    <div style="padding: 15px;">

                        <label>Specialization</label>
                        <select name="specialization" id="specialization"  value="{{$data->specialization}}"  style="color: black">
                            <option value="">Select</option>
                            <option value="Large animal and livestock">Large animal and livestock</option>
                            <option value="Companion animal">Companion animal</option>
                            <option value="Wildlife">Wildlife</option>

                        </select>

                    </div>

                    <div style="padding: 15px;">
                        <label>Fee</label>
                        <input type="text" name="fee" style="color: black" value="{{$data->fee}}">
                    </div>

                    <div style="padding: 15px;">
                        <label>Salary</label>
                        <input type="text" name="salary" style="color: black" value="{{$data->salary}}">
                    </div>

                    <div style="padding: 15px;">
                        <label>Old Image</label>
                        <img height="200" width="200" src="doctorimage/{{$data->image}}">
                    </div>


                    <div style="padding: 15px;">
                        <label>Change Image</label>
                        <input type="file" name="file" style="color: black">
                    </div>

                    <button type="reset" class="btn float-left"
                                                    style="width: 130px; background-color:#1c2331; color:white; font-weight:bold;"
                                                    onclick="return confirm('Clear your entry?')"> CLEAR</button>

                                                <button class="btn float-right" style="width:
              130px; background-color:#85BF67; color:white; font-weight:bold;" type="submit"
                                                    name="submit">SUBMIT</button>

                    </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
            </form>

           </div>

        </div>
        <!-- partial -->
        <!-- container-scroller -->
        <!-- plugins:js -->

        @include('admin.script')
</body>

</html>
