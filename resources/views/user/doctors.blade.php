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
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        label.logo{
            color:#023020;
            font-size: 25px;
            line-height: 30px;
            font-weight: bold;
        }
        .btn {
        font-weight: 700;
        transition: .5s;
        }

        .btn:hover {
            -webkit-box-shadow: 0 8px 6px -6px #555555;
            -moz-box-shadow: 0 8px 6px -6px #555555;
            box-shadow: 0 8px 6px -6px #555555;
        }

        .btn-primary {
            color: #FFFFFF;
        }

        .btn-square {
            width: 36px;
            height: 36px;
        }

        .btn-sm-square {
            width: 28px;
            height: 28px;
        }

        .btn-lg-square {
            width: 46px;
            height: 46px;
        }

        .btn-square,
        .btn-sm-square,
        .btn-lg-square {
            padding-left: 0;
            padding-right: 0;
            text-align: center;
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

    @include('user.doctor')

        <!-- Search Result Start -->
        <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 team-item">
                    <div class="row g-0 rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="../assets/img/doctors/doctor_1.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Dr. Rhonda Boulter</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Veterinarian</h6>
                                <p class="m-0"> I decided to be a veterinarian when I was in elementary school. </p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 team-item">
                    <div class="row g-0 rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="../assets/img/doctors/doctor_2.png" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Dr. Madison Rier</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Registered Veterinary Technician</h6>
                                <p class="m-0">I decided I wanted to get into the veterinary field, after doing a high school co-op in grade 11. </p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 team-item">
                    <div class="row g-0 rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="../assets/img/doctors/doctor_3.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Dr. Eleanor Wiss</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Animal Care Assistant</h6>
                                <p class="m-0">I graduated in 1996 from Lowell High School in Lowell, MA. I joined the clinic in 2006 and an area of interest for me is rescue and adoption. </p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 team-item">
                    <div class="row g-0 rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="../assets/img/doctors/doctor_4.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                            <h3>Dr. Francine Drin</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Client Care Representative</h6>
                                <p class="m-0"> My love for animals inspired me to go into the veterinary industry and I joined the clinic in 1995. </p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 team-item">
                    <div class="row g-0 rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="../assets/img/doctors/doctor_5.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                            <h3>Dr. Melissa Corpus </h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Client Care Representative</h6>
                                <p class="m-0">I have had a passion for animals for as long as I can remember! 
                                    I graduated from the Veterinary Technician program at Centralia College in 1993. </p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 team-item">
                    <div class="row g-0 rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="../assets/img/doctors/doctor_6.png" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                            <h3>Dr. Jakki Papp</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Clinic Manager</h6>
                                <p class="m-0">I joined the clinic in 2004. I have had a passion for helping animals since I was very young.</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Search Result End -->

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
