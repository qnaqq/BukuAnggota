<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/favicon-ts.ico">

    <style>
      .jumbotron {
        background-image: url('assets/diklat.png');
        background-size: 1300px 403px;
      }

      body {
        background-image: url('/assets/232.jpg')
      }
    </style>

    <title>
      @yield('title')
    </title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light mt-3">
        <div class="container">
        <a class="navbar-brand" href="{{ url('/bukuanggota') }}">
          <img src="assets/Logo ts unej.png" width="200" height="46" alt="">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            @yield('profile')
          </li>
        </ul>
            @yield('btn-login')
        </div>
      </nav>

      <div class="container mt-3">
        @yield('content')
      </div>

      <div class="container mt-5">
        <p class="font-weight-light font-italic"><i class="ri-copyright-line"></i> copyright 2020 . PBF G Kelompok 6</p>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>