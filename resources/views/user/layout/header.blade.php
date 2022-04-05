<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Wear</title>
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('main.css')}}">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand pl-2" href="#"><img src="./img/logo.gif" alt="Logo" class="img img-fuild"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link px-3 py-2" href="#">Home</a>
              </li>
            </ul>
            <form class="d-flex text-center pl-2 pt-lg-0 pt-2">
              {{-- <button class="btn px-4 py-2" type="button">Login</button> --}}
              <a href="{{url('/login')}}" class="btn px-4 py-2"type="button">Login</a>
          </form>
          </div>
        </nav>
    </section>

@yield('content')

<footer class="footer-bg mt-5 pt-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 mb-3 col-sm-12 d-flex justify-content-md-center">
          <div class="d-flex align-items-center"><a class="mb-2" href="#">
            <img src="./img/logo.gif" class="img-fluid" alt="footer-logo"></div>
           </a>
        </div>
      </div>
    </div>
  </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
