<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mindscape</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="" />
            <span>
             Mindscape 
            </span>
          </a>
          
            </div>
          </div>
          <div>
            
                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
<?php 	


$id=$_GET["id"];

$mysqli = mysqli_connect("localhost", "root", "root", "users","3306");


	$sql= "SELECT * FROM log_reg where id='$id';";
	$result = mysqli_query($mysqli,$sql);

	$arr= mysqli_fetch_all($result, MYSQLI_ASSOC);

$user=$arr[0]["name"];

echo '<h1 class="text-center bg-success">Hello '.$user.' start trying some tests out</h1>';	
	
?><div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                      <a href="t1.php">  <div class="card mb-4 shadow-sm"><img class="bd-placeholder-img" width="100%" height="225" src="profiles/t1.jpg">
                            <div class="card-body">
                                <p class="card-text">How Do You See Yourself? A Self-Esteem Assessment<br></p></a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Start: view | edit button --><div class="btn-group">
</div>
                                    <!-- End: view | edit button --><small>9 min</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm"><img class="bd-placeholder-img" width="100%" height="225" src="tba.jpg">
                            <div class="card-body">
                                <p class="card-text">New Test Launching Soon!<br></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Start: view | edit button --><div class="btn-group">
</div>
                                    <!-- End: view | edit button --><small>9 min</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm"><img class="bd-placeholder-img" width="100%" height="225" src="tba.jpg">
                            <div class="card-body">
                                <p class="card-text">New Test Launching Soon!<br></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Start: view | edit button --><div class="btn-group">
</div>
                                    <!-- End: view | edit button --><small>9 min</small></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm"><img class="bd-placeholder-img" width="100%" height="225" src="tba.jpg">
                            <div class="card-body">
                                <p class="card-text">New Test Launching Soon!<br></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Start: view | edit button --><div class="btn-group">
</div>
                                    <!-- End: view | edit button --><small>9 min</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm"><img class="bd-placeholder-img" width="100%" height="225" src="tba.jpg">
                            <div class="card-body">
                                <p class="card-text">New Test Launching Soon!<br></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Start: view | edit button --><div class="btn-group">
</div>
                                    <!-- End: view | edit button --><small>9 min</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm"><img class="bd-placeholder-img" width="100%" height="225" src="tba.jpg">
                            <div class="card-body">
                                <p class="card-text">New Test Launching Soon!<br></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Start: view | edit button --><div class="btn-group">
</div>
                                    <!-- End: view | edit button --><small>9 min</small></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm"><img class="bd-placeholder-img" width="100%" height="225" src="tba.jpg">
                            <div class="card-body">
                                <p class="card-text">New Test Launching Soon!<br></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Start: view | edit button --><div class="btn-group">
</div>
                                    <!-- End: view | edit button --><small>9 min</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm"><img class="bd-placeholder-img" width="100%" height="225" src="tba.jpg">
                            <div class="card-body">
                                <p class="card-text">New Test Launching Soon!<br></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Start: view | edit button --><div class="btn-group">
</div>
                                    <!-- End: view | edit button --><small>9 min</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm"><img class="bd-placeholder-img" width="100%" height="225" src="tba.jpg">
                            <div class="card-body">
                                <p class="card-text">New Test Launching Soon!<br></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Start: view | edit button --><div class="btn-group">
</div>
                                    <!-- End: view | edit button --><small>9 min</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <!-- end freelance section -->

  <!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="info_top">
          <div class="info_logo">
            <img src="images/logo.png" alt="" />
            <span>
             Mindscape 
            </span>
          </div>
          <div class="social_box">
            <a href="#">
              <img src="images/fb.png" alt="">
            </a>
            <a href="#">
              <img src="images/twitter.png" alt="">
            </a>
            <a href="#">
              <img src="images/linkedin.png" alt="">
            </a>
            <a href="#">
              <img src="images/instagram.png" alt="">
            </a>
            <a href="#">
              <img src="images/youtube.png" alt="">
            </a>
          </div>
        </div>

        <div class="info_main">
          <div class="row">
            <div class="col-md-3 col-lg-2">
              <div class="info_link-box">
                <h5>
                  Useful Link
                </h5>
                <ul>
                  <li class=" active">
                    <a class="" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="">
                    <a class="" href="about.html">About </a>
                  </li>
                  <li class="">
                    <a class="" href="work.html">Work </a>
                  </li>
                  <li class="">
                    <a class="" href="category.html">Category </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 ">
              <h5>
                Offices
              </h5>
              <p>
              Personality tests offer insights for self-awareness, not definitive answers. Use them as a guide, not a judgment. </p>
            </div>

            <div class="col-md-3 col-lg-2 offset-lg-1">
              <h5>
                Information
              </h5>
              <p>
              Unlock insights into your character, strengths, and behavior patterns with our free, science-backed personality test. </p>
            </div>

            <div class="col-md-3  offset-lg-1">
              <div class="info_form ">
            
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-10 mx-auto">
            <div class="info_contact layout_padding2">
              <div class="row">
                <div class="col-md-3">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/location.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Location
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/mail.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                      contact@mindscape.com</h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-5">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/call.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Call +01 1234567890
                      </h6>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayDate"></span> All Rights Reserved By
       Danoiu Fernando & Ilie Andrei Cristian</a>
      </p>
<div class="text-center" id="clock">
</div>
    </div>
  </footer>
  <!-- end  footer section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>



</body>
</body>

</html>
