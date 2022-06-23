<!DOCTYPE html>
<html lang="en">
<?php 
    include "config.php";
    $projId = $_GET["proj_id"];
    $query  = "SELECT * FROM portfolio_TomerDuchovni where proj_id=". $projId;
    $result = mysqli_query($connection, $query);
    if($result) {
        $row = mysqli_fetch_assoc($result); //there is only 1 item with id=X
    }
    else die("DB query failed.");

  ?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
<?php
    echo $row["proj_name"].' by Tomer Duchovni';
?>
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Tomer Duchovni</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


    </div>
  </header><!-- End Header -->

 
   <div class="hero hero-single route bg-image">

    <div class="overlay-mf"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <?php
              echo '<h2 class="hero-title mb-4">'.$row["proj_name"].'</h2>';
          ?>
        </div>
      </div>
    </div>
  
</div>
   

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="align-items-center">

              <?php
                echo '<div>';
                echo '<img src='.$row["proj_img"].' alt="">';
                echo '</div>';
              ?>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information:</h3>
              <ul>
                <?php
                  echo '<li><strong>Languages:</strong>'.$row["proj_lang"].'</li>';
                  echo '<li><strong>Project URL:</strong> <a href="'.$row["proj_link"].'">'.$row["proj_link"].'</a></li>';
                  echo '<li><strong>Project GitHub:</strong> <a href="'.$row["proj_github"].'">'.$row["proj_github"].'</a></li>';
                  ?>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Details:</h2>
              <?php
                  echo '<p>'.$row["proj_desc"].'</p>';
              ?>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
          <a href="https://www.shenkar.ac.il/he/departments/engineering-software-department"><b>תואר ראשון בהנדסת תוכנה בשנקר</b></a> <br>
            &copy; Copyright <strong><span>DevFolio</span></strong>. All Rights Reserved 
            <div class="credits">
              <span>Designed by </span><a href="https://bootstrapmade.com/">BootstrapMade</a>&amp; <span> Edited by <b><i>Tomer Duhcovni</i></b></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <?php
     mysqli_free_result($result);
  ?>


</body>

</html>

<?php 
  mysqli_close($connection);
?>