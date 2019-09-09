<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>STOOM</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">
{{$product}}
  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">hdengimech@gmail.com</a>
        <i class="fa fa-phone"></i> +99 0999 1226
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="index" class="scrollto">Sto<span>om</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
         @yield('menucontent')
        <ul class="nav-menu">
          <li class="menu-active"><a href="index">Home</a></li>
          
          <!-- <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li> -->
          <li class="menu-has-children"><a href="">Product</a>
            
            <ul>
                <li class="menu-has-children"><a href="rotary">Rotary</a>
                  <ul>
                    <li class="menu-has-children"><a href="rotary_pressure_joints">Rotary Pressure Joints</a>
                         <ul>
                          <li><a href="stationary_syphon"> For Stationary Syphon </a></li>
                          <li><a href="rotating_syphon">For Rotating Syphon</a></li>
                          <li><a href="monoflow_application">For Monoflow Application</a></li>
                          <li><a href="roto_seals">Roto Seals</a></li>
                        </ul>
                    </li>
                    <li><a href="syphon_system">Syphon System</a>
                       <ul>
                        <li><a href="#">Stationary Syphon</a></li>
                        <li><a href="#">Rotating Syphon</a></li>
                      </ul>
                    </li>
                    <li><a href="carbon_rings">Carbon Rings</a></li>
                     <li><a href="accessories">Syeam & Condensate Line Accessories</a>
                       <ul>
                        <li><a href="#">Flexible Hoses</a></li>
                        <li><a href="#">Steam Trap Ball Float Type</a></li>
                        <li><a href="#">Globe(Steam Stop)</a></li>
                        <li><a href="#">Sight glass</a></li>
                        <li><a href="#">"Y" Type Strainer</a></li>
                        <li><a href="#">Thermodynamic trap</a></li>
                        <li><a href="#">Non slam disc (Heck valv(DSV))</a></li>
                      </ul>
                    </li>
                      </ul>
                </li>
                <li class="menu-has-children"><a href="rotary">Valves</a>
                  <ul>
                    <li><a href="ball_valve">Ball valve</a></li>
                    <li><a href="butterfly_valve">Butterfly valve</a></li>
                    <li><a href="gate_valve">Gate valve</a></li>
                    <li><a href="globe_valve">Globe valve</a></li>
                    <li><a href="check_valve">Check valve</a></li>
                 </ul>
                </li>
            </ul>
          </li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  

  

     @yield('content')

 

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
