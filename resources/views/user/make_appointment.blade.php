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


                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    @if(session()->has('message'))

    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
    </div>

    @endif
    
    @include('user.appointment')

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
