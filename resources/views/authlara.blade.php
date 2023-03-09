
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel Authentication App | @yield('title-name')</title>
    <link rel="icon" type="text/icon" href="{{('assets/image/favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="{{('assets/css/style.css')}}">

      <!--bootstrap js-->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  
  </head>
  <body>

  <center>
  <h1 class="p-4 text-danger bg bg-info">We build Laravel Authentication App</h1>
  </center>

  <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{ ('assets/image/auth.jpg')}}" class="imgstyle"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="aboutus">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('register') }}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Carrers</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
   
<!--content-->
@yield('content');

  <div class="footer bg-dark text-white text-center p-5">
     Copyright @ 2023 All Rights Reserved
  </div>
    
   
  </body>
</html>
