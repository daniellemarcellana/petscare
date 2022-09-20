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

    <div class="page-hero bg-image " style="background-image: url(../assets/img/bg.png);">
        <div class="hero-section">
            <div class="container text-left wow zoomIn">
                <h1 class="display-4 text-body">We Care For Your Pets <br> As We Would Our Own </h1>
                <p class="text-body">Guaranteed 30 minutes of consultation because caring takes time</p>
                <a href="#appointment" class="btn btn-primary">Book A Consultation</a>
            </div>
        </div>
    </div>


    <div class="bg-light">
        <div class="page-section py-3 pl-5 ml-5 mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-secondary text-white">
                                <span class="mai-chatbubbles-outline"></span>
                            </div>
                            <p><span>Chat</span> with doctors</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p><span>Pet </span>Emergency Care</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-basket"></span>
                            </div>
                            <p><span>Pet</span> Pharmacy & Supplies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .page-section -->

        <div class="page-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1 class="display-4">Welcome to Your Health <br> Center</h1>
                        <p class="text-white mb-4">Pets Care - Veterinary Clinic is an animal hospital on dedicated to
                            providing veterinary care for dogs and cats. We take great pride in our veterinary clinic and the
                            level of care we provide for our clients. Our CVO accredited facility offers a wide range of services
                            including medical, diagnostic, diet and preventive health care for dogs and cats so they live a longer,
                            happier life. In addition, the hospital provides surgical services, dentistry, x-ray and ultrasound.
                            Our practice is conveniently located near parks, restaurants and locally owned shops.</p>
                            <p class="text-white mb-4">At Pets Care - Veterinary Clinic, we believe that your pet is an important part of your family and therefore deserves
                                the opportunity to live the happiest and healthiest life possible.</p>
                        <a href="about.html" class="btn btn-primary">Learn More</a>
                    </div>
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="../assets/img/pets.png" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->

    @include('user.doctor')

    @include('user.latest')

    <!-- .page-section -->

    @include('user.appointment')

    <!-- .banner-home -->

    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-4 py-3">
                    <h5>Pets Care - Veterinary Clinic</h5>
                    <p><a href="#" class="text-white">Pets Care - Veterinary Clinic is an animal hospital on dedicated to
                            providing veterinary care for dogs and cats. We take great pride in our veterinary clinic and the
                            level of care we provide for our clients. Our CVO accredited facility offers a wide range of services
                            including medical, diagnostic, diet and preventive health care for dogs and cats so they live a longer,
                            happier life. </a></p>

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
