<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a20c94f78.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    <!-- navbar -->
    <nav class=" sticky-top shadow p-3 mb-5 bg-body rounded navbar navbar-expand-lg " style="background-color: #2fafe5;">
  <div class="container-fluid px-lg-5">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
        <li class="nav-item mx-3">
          <a class="navbar-brand" aria-current="page" href="{{ url('/home') }}">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="navbar-brand" href="{{ url('/about') }}">About</a>
        </li>
        <li class="nav-item dropdown mx-3">
          <a class="navbar-brand dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action </a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item mx-3">
          <a class="navbar-brand" href="{{ url('/history') }}">History</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 border border-primary" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit" style="" >Search</button>
      </form>
      <!-- <button type="button" class=" mx-2 btn btn-primary">Login</button> -->
      <div class="btn-group mx-2" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="btnradio1">Login</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio3">Register</label>
        </div>
    </div>
  </div>
</nav>

@yield('content')

    <!-- footer -->
    <div class="d-flex p-4 justify-content-around bg-dark text-light" style="--bs-bg-opacity: 0.9">
            <div class="mx-2">
                <h3>Overview</h3><br>
                <p class="text-decoration-none"><a class="text-decoration-none text-light" href="{{ url('/home') }}">Home</a></p>
                <p><a class="text-decoration-none text-light" href="{{ url('/about') }}">About Us</a></p>

            </div>
            <div class="mx-2">
                <h3>Support Us</h3><br>
                <p>ABA : &emsp;&emsp;002 790 284</p>
                <p>ACLEDA :&ensp;056 789 282</p>
                <p>WING :&emsp;&ensp;087 913 592</p>
            </div>
            <div class="mx-2">
                <h3>SERVICES</h3><br>
                <p><a class="text-decoration-none text-light">Provide Reliable Services</a></p>
                <p><a class="text-decoration-none text-light">Always Near You</a></p>
                <p><a class="text-decoration-none text-light">Fast</a></p>
            </div>
            <div class="mx-2">
                <h3>LEGAL</h3><br>
                <p><a class="text-decoration-none text-light" href=""> Term and condition </a></p>
                <p><a class="text-decoration-none text-light" href="">Privacy policy </a></p>
                <p><a class="text-decoration-none text-light" href="">Term of use</a></p>
            </div>
            <div class="mx-2">
                <h3>Follow us</h3><br>
                <a class="text-decoration-none text-light" href=""><i class="mx-2 fa-brands fa-twitter" style="font-size:larger;" ></i></a>
                <a class="text-decoration-none text-light" href=""><i class="mx-2 fa-brands fa-facebook-f" style="font-size:larger;"></i></a>
                <a class="text-decoration-none text-light" href=""><i class="mx-2 fa-brands fa-instagram" style="font-size:larger;"></i></a>
                <a class="text-decoration-none text-light" href=""><i class="mx-2 fa-brands fa-youtube" style="font-size:larger;"></i></a>
            </div>
    </div>
    <div class="bg-primary d-flex justify-content-center p-2 text-light">
      <div class="rights-reserved mt-2">
                <p>&copy;2022 Term5 Web Application Project. All rights reserved.</p>
        </div>
    </div>


</body>
</html>
