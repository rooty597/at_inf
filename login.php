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
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="category.html"> Category </a>
              </li>
            </ul>
            <div class="user_option">
              <a href="">
                <span>
                  Login
                </span>
              </a>
             
            </div>
          </div>
          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- freelance section -->
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>
<form action="login.php" method="post">
              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>


              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" name="button" type="submit">Login</button>
</form>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="signup.php" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 	

$email=$_POST["email"];
$password=$_POST["password"];
$mysqli = mysqli_connect("localhost", "root", "root", "users","3306");
$button=$_POST["button"];
$loginin=false;

if(isset($button)){


	$sql= "SELECT * FROM log_reg";
	$result = mysqli_query($mysqli,$sql);

	$arr= mysqli_fetch_all($result, MYSQLI_ASSOC);
				
	foreach($arr as $chk){
	
		if($chk["email"] == $email && $chk["password"] == $password){
	$id=$chk["id"];
	echo "SOMTHING";
				die();
	}

	}
				if(!$loginin){
					echo '<h1 class="bg-danger text-center">Email or password incorrect,if you dont have a account please sign in</h1>';
	
}}?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
Unlock insights into your character, strengths, and behavior patterns with our free, science-backed personality test.
              </p>
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
