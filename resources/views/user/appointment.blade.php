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

    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />


</head>

<div class="page-section">
<div class="container" id="appointment">
      <h1 class="text-center display-5">Make an Appointment</h1>

      <form class="main-form" action="{{url('appointment')}}" method="POST">

        @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2">
            <input type="text" name="name" class="form-control" placeholder="Full name">
          </div>

          <div class="col-12 col-sm-6 py-2">
            <input type="email" name="email" class="form-control" placeholder="Email address..">
          </div>

          <div class="col-12 col-sm-6 py-2">
            <input type="tel" name="phone" class="form-control" placeholder="Phone">
          </div>

          <div class="col-12 col-sm-6 py-2" data-wow-delay="300ms">
            <select name="doctor" id="doctor" class="custom-select">

                <option>--- Select Doctor ---</option>
                @foreach ($doctor as $doctors)

              <option value="{{$doctors->name}}">{{$doctors->name}} - {{$doctors->specialization}}</option>

                @endforeach

            </select>
          </div>


          <div class="col-12 col-sm-12 py-2" data-wow-delay="300ms">

            <div id="calendar"> </div>

            <input type="date" name="date" class="form-control">

          </div>

          <div class="col-12 py-2" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>




        </div>

        <button type="submit" class="btn btn-outline-dark text-dark">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->

  <script>
    jSuites.calendar(document.getElementById('calendar'), {
        format: 'YYYY-MM-DD',
        onupdate: function(a,b) {
            document.getElementById('calendar-value').innerText = b;
        }
    });
    </script>

</html>
