<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Pets Care - Veterinary Clinic</title>

    <link rel="shortcut icon" href="../assets/img/pet-logo.png" />

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

    <style>
        .about-section{
        background: url(../assets/img/bg-about-pet.png) no-repeat left;
        background-size: 50%;
        background-color: #fdfdfd;
        overflow: hidden;
        padding-left: 150px;
        }

        .inner-container{
            width: 60%;
            float: right;
            background-color: #fdfdfd;
            padding: 150px;
            margin-left:20px;
        }

        .inner-container h1{
            margin-bottom: 30px;
            font-size: 30px;
            font-weight: 900;
        }
        .inner-container p{
            font-size: 16px;
        }

        .text{
            font-size: 25px;
            color: #545454;
            line-height: 30px;
            text-align: justify;
            margin-bottom: 40px;
        }

        .skills{
            display: flex;
            justify-content: space-between;
            font-weight: 700;
            font-size: 13px;
        }

        @media screen and (max-width:1200px){
            .inner-container{
                padding: 80px;
            }
        }

        @media screen and (max-width:1000px){
            .about-section{
                background-size: 100%;
                padding: 100px 40px;
            }
            .inner-container{
                width: 100%;
            }
        }

        @media screen and (max-width:600px){
            .about-section{
                padding: 0;
            }
            .inner-container{
                padding: 60px;
            }
        }
        
     
        </style>
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> petscare.veterinaryclinic@gmail.comm</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">

                <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">Pets Care </span>- Veterinary Clinic</a>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about_us')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('doctors')}}">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('make_appointment')}}">Book Appointment</a>
                        </li>
                

                        @if (Route::has('login'))

                            @auth

                            <li class="nav-item">
                                <a class="nav-link" style="background-color: #add8e6; color:black;" href="{{url('myappointment')}}">My Appointment</a>
                            </li>

                        <x-app-layout>
                        </x-app-layout>
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                                </li>

                            @endauth
                        @endif


                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    @if (session()->has('message'))
        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert">
                x
            </button>

            {{ session()->get('message') }}

        </div>
    @endif


                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>


    <div class="about-section">
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text-dark mb-4">Pets Care - Veterinary Clinic is an animal hospital on dedicated to 
                            providing veterinary care for dogs and cats. We take great pride in our veterinary clinic and the 
                            level of care we provide for our clients. Our CVO accredited facility offers a wide range of services 
                            including medical, diagnostic, diet and preventive health care for dogs and cats so they live a longer, 
                            happier life. In addition, the hospital provides surgical services, dentistry, x-ray and ultrasound.
                            Our practice is conveniently located near parks, restaurants and locally owned shops.</p>
            <p class="text-dark mb-4">At Pets Care - Veterinary Clinic, we believe that your pet is an important part of your family and therefore deserves 
                                the opportunity to live the happiest and healthiest life possible.</p>
            <div class="skills text-md">
                <span>Emergency Cases</span>
                <span>Primary Care</span>
                <span>Online Appointment</span>
            </div>
        </div>
    </div>

    <div class="page-section bg-light">
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/medicine.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-lg font-weight-bold text-center"><a href="blog-details.html">World Class Medicine</a></h5><br>
              <p class="text-center">As the leading innovator in veterinary medicine, we define best practices 
                  and implement cutting-edge approaches to improve the lives of pets everywhere.  </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/hometown.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-lg font-weight-bold text-center"><a href="blog-details.html">Hometown Care</a></h5><br>
              <p class="text-center">Our compassionate teams take pride in being a familiar and comforting presence 
                  in the lives of pets and their people. </p><br>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/blog/blog3.png" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-lg font-weight-bold text-center"><a href="blog-details.html">Connected Care Tools</a></h5><br>
              <p class="text-center">No matter where you and your pet are, our expert care teams are just a tap away. </p><br><br>
            </div>
            </div>
          </div>
        </div>

        </div>

      </div>
    </div>
  </div>

       <!-- About Start -->
       <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-250 h-95" src="../assets/img/bg-about-pet1.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                       
                        <h1 class="display-4">Best Medical Care For Pets</h1>
                    </div>
                    <p class="text-dark mb-4">Pets Care - Veterinary Clinic is an animal hospital on dedicated to 
                            providing veterinary care for dogs and cats. We take great pride in our veterinary clinic and the 
                            level of care we provide for our clients. Our CVO accredited facility offers a wide range of services 
                            including medical, diagnostic, diet and preventive health care for dogs and cats so they live a longer, 
                            happier life. In addition, the hospital provides surgical services, dentistry, x-ray and ultrasound.
                            Our practice is conveniently located near parks, restaurants and locally owned shops.</p>
                    <p class="text-dark mb-4">At Pets Care - Veterinary Clinic, we believe that your pet is an important part of your family and therefore deserves 
                                the opportunity to live the happiest and healthiest life possible.</p>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                <h6 class="mb-0">Qualified<small class="d-block text-primary">Doctors</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                <h6 class="mb-0">Emergency<small class="d-block text-primary">Services</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                                <h6 class="mb-0">Accurate<small class="d-block text-primary">Testing</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                                <h6 class="mb-0">Free<small class="d-block text-primary">Ambulance</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3"> 
                <div class="col-sm-6 col-lg-4 py-3">
                    <h5>Pets Care - Veterinary Clinic</h5>
                    <p><a href="#" class="text-white">Pets Care - Veterinary Clinic is an animal hospital on dedicated to 
                            providing veterinary care for dogs and cats. We take great pride in our veterinary clinic and the 
                            level of care we provide for our clients. Our CVO accredited facility offers a wide range of services 
                            including medical, diagnostic, diet and preventive health care for dogs and cats so they live a longer, 
                            happier life.</a></p>

                </div>
                <div class="col-sm-6 col-lg-2 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#" class="text-white">About Us</a></li>
                        <li><a href="#" class="text-white">Career</a></li>
                        <li><a href="#" class="text-white">Editorial Team</a></li>
                        <li><a href="#" class="text-white">Protection</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="#" class="text-white">Terms & Condition</a></li>
                        <li><a href="#" class="text-white">Privacy</a></li>
                        <li><a href="#" class="text-white">Advertise</a></li>
                        <li><a href="#" class="text-white">Join as Doctors</a></li>
                    </ul>
                </div>
            
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2 text-white">31st Floor, One World Place, Taguig, 1634 Metro Manila</p>
                    <a href="#" class="footer-link text-white">(02) 576-4567</a>
                    <a href="#" class="footer-link text-white">petscare.veterinaryclinic@gmail.com</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr>

            <p class="d-flex justify-content-center" id="copyright" >&copy; 2022 Pets Care - Veterinary Clinic</p>
        </div>
    </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
