<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>


  body {
      margin: 0;
  }

  html,
  body,
  .wrapper {
      height: 100%;
  }

  /* sidebar */

  .wrapper {
      display: flex;
      width: 100%;
      align-items: stretch;
  }

  #sidebar {
      min-width: 250px;
      max-width: 250px;
      background: #d73627;
      color: #fff;
      transition: all 0.3s;
      flex-direction: column;
  }

  #sidebar.active {
      margin-left: -250px;
  }

  #sidebar .sidebar-header {
      padding: 20px;
      background: #E50914;
  }

  #sidebar ul.components {
      padding: 20px 0;
      border-bottom: 1px solid #906e67;
  }

  #sidebar ul h5 {
      color: black;
      padding: 10px;
  }

  #sidebar ul li a {
      padding: 10px;
      font-size: 1 em;
      display: block;
      color: black;
  }

  #sidebar ul li a:hover {
      color: inherit;
      text-decoration: none;
      transition: all 0.3s;
      background: #f24f3a;
  }

  #sidebar ul li.active>a,
  a[aria-expanded="true"] {
      color: #fff;
      background: #E50914;
  }

  a[data-toggle="collapse"] {
      position: relative;
  }

  .dropdown-toggle::after {
      display: block;
      position: absolute;
      top: 50%;
      right: 20px;
      transform: translateY(-50%);
  }

  ul ul a {
      font-size: 0.9em !important;
      padding-left: 30px !important;
      background: #E50914;
  }

  ul.CTAs {
      padding: 20px;
  }

  ul.CTAs a {
      text-align: center;
      font-size: 0.9em !important;
      display: block;
      border-radius: 5px;
      margin-bottom: 5px;
  }

  a.download {
      background: #fff;
      color: #7386D5;
  }

  a.article,
  a.article:hover {
      background: #E50914 !important;
      color: #ffbcac !important;
  }



  @media (max-width: 768px) {
      .nav-item {
          display: none !important;
      }
      .navbar-brand {
          margin-right: 3rem !important;
      }
      html {
          height: min-content;
      }
  }
  </style>
</head>
<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" >
        <div class="sidebar-header">
            <h3>Numerical</h3>
        </div>

        <ul class="list-unstyled components">
            <li class="">
                <a href="#RootSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Root of Equestions</a>
                <ul class="collapse list-unstyled" id="RootSubmenu">
                    <li>
                        <a href="#">Bisection Method</a>
                    </li>
                    <li>
                        <a href="#">False Position Method</a>
                    </li>
                    <li>
                        <a href="#">One Point Iteration</a>
                    </li>
                    <li>
                        <a href="#">Newton Rarpson</a>
                    </li>
                    <li>
                        <a href="#">Secant Method</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#LinearSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Linear of Equestions</a>
                <ul class="collapse list-unstyled" id="LinearSubmenu">
                    <li>
                        <a href="#">Cramer Rule</a>
                    </li>
                    <li>
                        <a href="#">False Position Method</a>
                    </li>
                    <li>
                        <a href="#">One Point Iteration</a>
                    </li>
                    <li>
                        <a href="#">Newton Rarpson</a>
                    </li>
                    <li>
                        <a href="#">Secant Method</a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>

    @yield('body')
    <!-- <div style="margin-left:25%">

    <div class="w3-container w3-teal">
      <h1>My Page</h1>
    </div>

    <img src="img_car.jpg" alt="Car" style="width:100%">

    <div class="w3-container">
    <h2>Sidebar Navigation Example</h2>
    <p>The sidebar with is set with "style="width:25%".</p>
    <p>The left margin of the page content is set to the same value.</p>
    </div>

    </div> -->

</div>



</body>

<script type="text/javascript">
$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
    });
});
</script>
</html>
