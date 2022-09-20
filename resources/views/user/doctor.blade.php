<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center HTML5 Template</title>
    <link rel="shortcut icon" href="/images/hospital-logo.png" />

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

    
</head>
  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp display-5">Our Team</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach ($doctor as $doctors)


        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img style="height: 300px !important" src="doctorimage/{{$doctors->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              <span class="text-sm text-grey">{{$doctors->specialization}}</span>
            </div>
          </div>
        </div>

        @endforeach



      </div>
    </div>
  </div>
