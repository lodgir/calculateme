<?php
include('auth.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CalculateMe</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">Calculate<h2 style="color: #DAA520; display: inline;">Me</h4></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <br/>
            <li class="nav-item mx-0 mx-lg-1">
              <div class="dropdown">
                <button type="button" id="dropdown" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                  MY WALLET
                </button>
                <div class="dropdown-menu" style="background-color: #DAA520">
                  <a class="dropdown-item" href="myproduct.php" id="catag">My Products</a>
                  <a class="dropdown-item" href="goldstatus.php" id="catag">Gold Status</a>
                </div>
              </div>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="about.php">About Us</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Contact.php">Contact Us</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <div class="dropdown">
                <button type="button" id="dropdown" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                  SETTING
                </button>
                <div class="dropdown-menu" style="background-color: #DAA520">
                  <a class="dropdown-item" href="profile.php" id="catag">Profile</a>
                  <a class="dropdown-item" href="passchange.php" id="catag">Password Changes</a>
                </div>
              </div>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div class="container-fluid">
  <div class="row">
    <div id="screen" class="col-lg-6 right" >
      <br/>
    <?php
    include('tem.php');
    ?>
    </div>
    <div class="col-lg-5 left"><center>
    <br><br><br>
    <form class="login-form" action=""  id="f1" method="post">
                                    <input type="button" value="book" id="bt1" onclick="book();" class="btn btn-primary" style="width: 130px"><br><br>
                                    <input type="button" value="alert" id="bt3" onclick="alert();" class="btn btn-primary" style="width: 130px"><br><br>
    </form>
</div>
</div>
</div>

<!-- Footer -->
    <footer class="footer text-center">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">7th Cross, Anepalya
              <br>Adugodi post, Bangalore-30</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a> 
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About CalculateMe</h4>
            <p class="lead mb-0">CalculateMe is a free to use, open source website created by
              <a href="http://CalculateMe.com">CalculateMe</a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>
    <script type="text/javascript">
            function book() {
                location.replace("book.php");
            }
            function alert() {
                location.replace("alert.php");
            }
                      
</script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#screen').load('tem.php');
}, 5000); // refresh every 10000 milliseconds  
</script>

  </body>

</html>
