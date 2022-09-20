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
        <!-- partial -->
        <div class="container">

            <div class="float-right">


                <br><br><br><br>
                <a href="{{ route('downloadDoctors') }}" class="mt-4  rounded my-3 btn btn-info">Generate PDF</a>
                <a href="{{ route('getDoctors') }}" class=" mt-4 rounded my-3 mx-3 btn btn-success">Preview PDF</a>
                <a href="{{ route('getDoctors') }}" class=" mt-4 rounded my-3 mx-1 btn btn-danger">Import Doctors</a>

                <table>
                    <tr style="background-color: rgb(36, 158, 206);">
                        <th style="padding: 10px;">Name</th>
                        <th style="padding: 10px;">Address</th>
                        <th style="padding: 5px;">Email</th>
                        <th style="padding: 5px;">Phone</th>
                        <th style="padding: 10px;">Specialization</th>
                        <th style="padding: 10px;">Image</th>
                        <th style="padding: 10px;">Fee</th>
                        <th style="padding: 10px;">Salary</th>
                        <th style="padding: 10px;">Update</th>
                        <th style="padding: 10px;">Delete</th>

                    </tr>
                    @foreach ($data as $doctor)
                        <tr align="center" style="background-color: white; color: black;">
                            <td style="padding: 10px;">{{ $doctor->name }}</td>
                            <td style="padding: 10px;">{{ $doctor->address }}</td>
                            <td style="padding: 10px;">{{ $doctor->email }}</td>
                            <td style="padding: 10px;">{{ $doctor->phone }}</td>
                            <td style="padding: 10px;">{{ $doctor->specialization }}</td>
                            <td style="padding: 10px;"><img height="150" width="150"
                                    src="doctorimage/{{ $doctor->image }}"></td>
                            <td style="padding: 10px;">{{ $doctor->fee }}</td>
                            <td style="padding: 10px;">{{ $doctor->salary }}</td>
                            <td><a class="btn btn-secondary" href="{{ url('updatedoctor', $doctor->id) }}">Update</a>
                            </td>
                            <td><a class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this record?')"
                                    href="{{ url('deletedoctor', $doctor->id) }}">Delete</a></td>


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
