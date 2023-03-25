<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="simple html">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Simple HTML</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
    <link href="images/fav-logo.png">
    

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
  </head>

  <body>

        <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center text-white bg-warning">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope" style="color: white;"></i> <a href="mailto:info@smartupdate.com.ng" 
                style="color: white; text-decoration:none;">info@example.com</a>
                <i class="bi bi-phone" style="color: white;"></i> 09087654321
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="https://web.facebook.com/" target="_blank" class="facebook" style="color: white;"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank" class="instagram" style="color: white;"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>

  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="images/logo-main.png" width="130" height=""  aria-hidden="true">
        <span class="fs-4"></span>
      </a>

      <ul class="nav nav-pills pt-4">
      <li class="nav-item">
        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])=="index.php")?"active bg-warning":""?>" aria-current="page" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])=="about_us.php")?"active bg-warning":""?>"" href="about_us.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])=="services.php")?"active bg-warning":""?>"" href="services.php">OUR SERVICES</a>
      </li>
      <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])=="contact_us.php")?"active bg-warning":""?>"" href="contact_us.php">CONTACT US</a>
      </li>
      </ul>
    </header>
  </div>

