<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @font-face {
            font-family: 'coruna';
        }

        body {
            font-family: "cloudlight";
        }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Numerical Method</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Root of Equestions
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/Numerical/public/Bisection">Bisection Method</a>
              <a class="dropdown-item" href="/Numerical/public/FalsePosition">False Position Method</a>
              <a class="dropdown-item" href="/Numerical/public/OnePointIteration">One Point iteration</a>
              <a class="dropdown-item" href="/Numerical/public/NewtonRarpson">Newton Rarpson</a>
              <a class="dropdown-item" href="/Numerical/public/Secant">Secant Method</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkL" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Linear System
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkL">
              <a class="dropdown-item" href="/Numerical/public/FalsePosition">Cramer Rule's</a>
              <a class="dropdown-item" href="/Numerical/public/LUDecomposer">L U Decomposer</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkI" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Interpolation
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkI">
              <a class="dropdown-item" href="/Numerical/public/NewtonInterpolation">Newton Interpolation</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkE" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Exact Intregration
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkE">
              <a class="dropdown-item" href="/Numerical/public/Trapezoidal">Trapezoidal</a>
              <a class="dropdown-item" href="/Numerical/public/Simson">Simson'sRule</a>
            </div>
          </li>


        </ul>
      </div>
    </nav>
  </body>
  @yield('body')
</html>
