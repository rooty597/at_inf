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


 <h1 class="text-center fw-bolder text-dark">
Welcome to the Self-Esteem Test
</h1>
<p class="text-center">
Take a moment to reflect on how you see yourself.
Answer honestly </p>
<p class="text-center">
Check all the options and once you are done click the SUBMIT button<br>

</p>
<?php 

$q1=$_POST["q1"];
$q2=$_POST["q2"];
$q3=$_POST["q3"];
$q4=$_POST["q4"];
$q5=$_POST["q5"];
$q6=$_POST["q6"];
$q7=$_POST["q7"];
$q8=$_POST["q8"];
$q9=$_POST["q9"];
$q10=$_POST["q10"];
$button=$_POST["button"];
$total_score = (8-$q1) + (8-$q2) +  $q3 + $q4 + (8-$q5) + (8-$q6) + (8-$q7) + (8-$q8) + (8-$q9) + (8-$q10);
if(isset($button)){
	if($total_score<30){
		echo '<h1 class="bg-success text-center">Very Low / May Indicate Psychological Risk</h1>';}
	else if($total_score>30 && $total_score<39){
		echo '<h1 class="bg-success text-center">Low Self-Esteem / Needs Support </h1>';}
	else if($total_score>40 && $total_score<49){
		echo '<h1 class="bg-success text-center">	Moderate / Average Self-Esteem</h1>';}
else if($total_score>50 && $total_score<59){
	echo '<h1 class="bg-success text-center">High Self-Esteem </h1>';}
else if($total_score>60 && $total_score<70){
	echo '<h1 class="bg-success text-center">Very High Self-Esteme </h1>';}

}
?>
<form action="t1.php" method="POST" class="container text-center col-6">

  <h3>1. I feel confident in my abilities.</h3>
  <div class="text-center row">
    <input type="radio" class="btn-check" name="q1" id="q1_1" value="1" checked>
    <label class="btn btn-secondary col-1" for="q1_1">Totally Agree</label>
    <input type="radio" class="btn-check" name="q1" id="q1_2" value="2">
    <label class="btn btn-secondary col-2" for="q1_2">Strongly Agree</label>
    <input type="radio" class="btn-check" name="q1" id="q1_3" value="3">
    <label class="btn btn-secondary col-1" for="q1_3">Partially Agree</label>
    <input type="radio" class="btn-check" name="q1" id="q1_4" value="4">
    <label class="btn btn-secondary col-2" for="q1_4">Neutral</label>
    <input type="radio" class="btn-check" name="q1" id="q1_5" value="5">
    <label class="btn btn-secondary col-1" for="q1_5">Partially Disagree</label>
    <input type="radio" class="btn-check" name="q1" id="q1_6" value="6">
    <label class="btn btn-secondary col-2" for="q1_6">Strongly Disagree</label>
    <input type="radio" class="btn-check" name="q1" id="q1_7" value="7">
    <label class="btn btn-secondary col-1" for="q1_7">Totally Disagree</label>
  </div>

  <h3>2. I believe I am a person of worth.</h3>
  <div class="text-center row">
    <input type="radio" class="btn-check" name="q2" id="q2_1" value="1" checked>
    <label class="btn btn-secondary col-1" for="q2_1">Totally Agree</label>
    <input type="radio" class="btn-check" name="q2" id="q2_2" value="2">
    <label class="btn btn-secondary col-2" for="q2_2">Strongly Agree</label>
    <input type="radio" class="btn-check" name="q2" id="q2_3" value="3">
    <label class="btn btn-secondary col-1" for="q2_3">Partially Agree</label>
    <input type="radio" class="btn-check" name="q2" id="q2_4" value="4">
    <label class="btn btn-secondary col-2" for="q2_4">Neutral</label>
    <input type="radio" class="btn-check" name="q2" id="q2_5" value="5">
    <label class="btn btn-secondary col-1" for="q2_5">Partially Disagree</label>
    <input type="radio" class="btn-check" name="q2" id="q2_6" value="6">
    <label class="btn btn-secondary col-2" for="q2_6">Strongly Disagree</label>
    <input type="radio" class="btn-check" name="q2" id="q2_7" value="7">
    <label class="btn btn-secondary col-1" for="q2_7">Totally Disagree</label>
  </div>

  <h3>3. I often compare myself negatively to others.</h3>
  <div class="text-center row">
    <input type="radio" class="btn-check" name="q3" id="q3_1" value="1" checked>
    <label class="btn btn-secondary col-1" for="q3_1">Totally Agree</label>
    <input type="radio" class="btn-check" name="q3" id="q3_2" value="2">
    <label class="btn btn-secondary col-2" for="q3_2">Strongly Agree</label>
    <input type="radio" class="btn-check" name="q3" id="q3_3" value="3">
    <label class="btn btn-secondary col-1" for="q3_3">Partially Agree</label>
    <input type="radio" class="btn-check" name="q3" id="q3_4" value="4">
    <label class="btn btn-secondary col-2" for="q3_4">Neutral</label>
    <input type="radio" class="btn-check" name="q3" id="q3_5" value="5">
    <label class="btn btn-secondary col-1" for="q3_5">Partially Disagree</label>
    <input type="radio" class="btn-check" name="q3" id="q3_6" value="6">
    <label class="btn btn-secondary col-2" for="q3_6">Strongly Disagree</label>
    <input type="radio" class="btn-check" name="q3" id="q3_7" value="7">
    <label class="btn btn-secondary col-1" for="q3_7">Totally Disagree</label>
  </div>

  <h3>4. I feel I have little to contribute.</h3>
  <div class="text-center row">
    <input type="radio" class="btn-check" name="q4" id="q4_1" value="1" checked>
    <label class="btn btn-secondary col-1" for="q4_1">Totally Agree</label>
    <input type="radio" class="btn-check" name="q4" id="q4_2" value="2">
    <label class="btn btn-secondary col-2" for="q4_2">Strongly Agree</label>
    <input type="radio" class="btn-check" name="q4" id="q4_3" value="3">
    <label class="btn btn-secondary col-1" for="q4_3">Partially Agree</label>
    <input type="radio" class="btn-check" name="q4" id="q4_4" value="4">
    <label class="btn btn-secondary col-2" for="q4_4">Neutral</label>
    <input type="radio" class="btn-check" name="q4" id="q4_5" value="5">
    <label class="btn btn-secondary col-1" for="q4_5">Partially Disagree</label>
    <input type="radio" class="btn-check" name="q4" id="q4_6" value="6">
    <label class="btn btn-secondary col-2" for="q4_6">Strongly Disagree</label>
    <input type="radio" class="btn-check" name="q4" id="q4_7" value="7">
    <label class="btn btn-secondary col-1" for="q4_7">Totally Disagree</label>
  </div>

  <h3>5. I respect myself.</h3>
  <div class="text-center row">
    <input type="radio" class="btn-check" name="q5" id="q5_1" value="1" checked>
    <label class="btn btn-secondary col-1" for="q5_1">Totally Agree</label>
    <input type="radio" class="btn-check" name="q5" id="q5_2" value="2">
    <label class="btn btn-secondary col-2" for="q5_2">Strongly Agree</label>
    <input type="radio" class="btn-check" name="q5" id="q5_3" value="3">
    <label class="btn btn-secondary col-1" for="q5_3">Partially Agree</label>
    <input type="radio" class="btn-check" name="q5" id="q5_4" value="4">
    <label class="btn btn-secondary col-2" for="q5_4">Neutral</label>
    <input type="radio" class="btn-check" name="q5" id="q5_5" value="5">
    <label class="btn btn-secondary col-1" for="q5_5">Partially Disagree</label>
    <input type="radio" class="btn-check" name="q5" id="q5_6" value="6">
    <label class="btn btn-secondary col-2" for="q5_6">Strongly Disagree</label>
    <input type="radio" class="btn-check" name="q5" id="q5_7" value="7">
    <label class="btn btn-secondary col-1" for="q5_7">Totally Disagree</label>
  </div>

  <h3>6. I am satisfied with myself.</h3>
  <div class="text-center row">
    <input type="radio" class="btn-check" name="q6" id="q6_1" value="1" checked>
    <label class="btn btn-secondary col-1" for="q6_1">Totally Agree</label>
    <input type="radio" class="btn-check" name="q6" id="q6_2" value="2">
    <label class="btn btn-secondary col-2" for="q6_2">Strongly Agree</label>
    <input type="radio" class="btn-check" name="q6" id="q6_3" value="3">
    <label class="btn btn-secondary col-1" for="q6_3">Partially Agree</label>
    <input type="radio" class="btn-check" name="q6" id="q6_4" value="4">
    <label class="btn btn-secondary col-2" for="q6_4">Neutral</label>
    <input type="radio" class="btn-check" name="q6" id="q6_5" value="5">
    <label class="btn btn-secondary col-1" for="q6_5">Partially Disagree</label>
    <input type="radio" class="btn-check" name="q6" id="q6_6" value="6">
    <label class="btn btn-secondary col-2" for="q6_6">Strongly Disagree</label>
    <input type="radio" class="btn-check" name="q6" id="q6_7" value="7">
    <label class="btn btn-secondary col-1" for="q6_7">Totally Disagree</label>
  </div>

  <h3>7. I feel good about myself.</h3>
  <div class="text-center row">
    <input type="radio" class="btn-check" name="q7" id="q7_1" value="1" checked>
    <label class="btn btn-secondary col-1" for="q7_1">Totally Agree</label>
    <input type="radio" class="btn-check" name="q7" id="q7_2" value="2">
    <label class="btn btn-secondary col-2" for="q7_2">Strongly Agree</label>
    <input type="radio" class="btn-check" name="q7" id="q7_3" value="3">
    <label class="btn btn-secondary col-1" for="q7_3">Partially Agree</label>
    <input type="radio" class="btn-check" name="q7" id="q7_4" value="4">
    <label class="btn btn-secondary col-2" for="q7_4">Neutral</label>
    <input type="radio" class="btn-check" name="q7" id="q7_5" value="5">
    <label class="btn btn-secondary col-1" for="q7_5">Partially Disagree</label>
    <input type="radio" class="btn-check" name="q7" id="q7_6" value="6">
    <label class="btn btn-secondary col-2" for="q7_6">Strongly Disagree</label>
    <input type="radio" class="btn-check" name="q7" id="q7_7" value="7">
    <label class="btn btn-secondary col-1" for="q7_7">Totally Disagree</label>
  </div>

  <h3>8. I trust myself to make the right decisions.</h3>
  <div class="text-center row">
    <input type="radio" class="btn-check" name="q8" id="q8_1" value="1" checked>
    <label class="btn btn-secondary col-1" for="q8_1">Totally Agree</label>
    <input type="radio" class="btn-check" name="q8" id="q8_2" value="2">
    <label class="btn btn-secondary col-2" for="q8_2">Strongly Agree</label>
    <input type="radio" class="btn-check" name="q8" id="q8_3" value="3">
    <label class="btn btn-secondary col-1" for="q8_3">Partially Agree</label>
    <input type="radio" class="btn-check" name="q8" id="q8_4" value="4">
    <label class="btn btn-secondary col-2" for="q8_4">Neutral</label>
    <input type="radio" class="btn-check" name="q8" id="q8_5" value="5">
    <label class="btn btn-secondary col-1" for="q8_5">Partially Disagree</label>
    <input type="radio" class="btn-check" name="q8" id="q8_6" value="6">
    <label class="btn btn-secondary col-2" for="q8_6">Strongly Disagree</label>
    <input type="radio" class="btn-check" name="q8" id="q8_7" value="7">
    <label class="btn btn-secondary col-1" for="q8_7">Totally Disagree</label>
  </div>

  <h3>9. I handle challenges effectively.</h3>
  <div class="text-center row">
    <input type="radio" class="btn-check" name="q9" id="q9_1" value="1" checked>
    <label class="btn btn-secondary col-1" for="q9_1">Totally Agree</label>
    <input type="radio" class="btn-check" name="q9" id="q9_2" value="2">
    <label class="btn btn-secondary col-2" for="q9_2">Strongly Agree</label>
    <input type="radio" class="btn-check" name="q9" id="q9_3" value="3">
    <label class="btn btn-secondary col-1" for="q9_3">Partially Agree</label>
    <input type="radio" class="btn-check" name="q9" id="q9_4" value="4">
    <label class="btn btn-secondary col-2" for="q9_4">Neutral</label>
    <input type="radio" class="btn-check" name="q9" id="q9_5" value="5">
    <label class="btn btn-secondary col-1" for="q9_5">Partially Disagree</label>
    <input type="radio" class="btn-check" name="q9" id="q9_6" value="6">
    <label class="btn btn-secondary col-2" for="q9_6">Strongly Disagree</label>
    <input type="radio" class="btn-check" name="q9" id="q9_7" value="7">
    <label class="btn btn-secondary col-1" for="q9_7">Totally Disagree</label>
  </div>

  <h3>10. I accept who I am, even with my flaws.</h3>
  <div class="text-center row">
    <input type="radio" class="btn-check" name="q10" id="q10_1" value="1" checked>
    <label class="btn btn-secondary col-1" for="q10_1">Totally Agree</label>
    <input type="radio" class="btn-check" name="q10" id="q10_2" value="2">
    <label class="btn btn-secondary col-2" for="q10_2">Strongly Agree</label>
    <input type="radio" class="btn-check" name="q10" id="q10_3" value="3">
    <label class="btn btn-secondary col-1" for="q10_3">Partially Agree</label>
    <input type="radio" class="btn-check" name="q10" id="q10_4" value="4">
    <label class="btn btn-secondary col-2" for="q10_4">Neutral</label>
    <input type="radio" class="btn-check" name="q10" id="q10_5" value="5">
    <label class="btn btn-secondary col-1" for="q10_5">Partially Disagree</label>
    <input type="radio" class="btn-check" name="q10" id="q10_6" value="6">
    <label class="btn btn-secondary col-2" for="q10_6">Strongly Disagree</label>
    <input type="radio" class="btn-check" name="q10" id="q10_7" value="7">
    <label class="btn btn-secondary col-1" for="q10_7">Totally Disagree</label>
</div>
<button type="submit" name="button" class="btn btn-dark col-5 my-5 py-3">Sumbit</button>
</form>

<style>
input:checked +label{
background:gray;
}
input{
visibility:hidden;}
</style>








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
