<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
 ?>

<!doctype html>
<html lang="en">
<head>
  <title>Men's Salon Management System | Home Page</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

  
</head>

<body id="home" style=" background-color:#D2B48C;">





<?php include_once('includes/header.php');?>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<div class="w3l-hero-headers-9">
  <div class="css-slider" >
    <input id="slide-1" type="radio" name="slides" checked >
      <section class="slide " style=" background-image: url('assets/new_images/home_pic1.jpeg');" >
        <div class="container" >
        <div class="banner-text">
          <h4 style="color:#ffff ; font-size: 40px; "> Your Types. Your Style. Your Color.<br>A place for men to relax, refresh, and refine</h4></br>
          <h3 style="color:#ffff; font-size: 50px;">MEN'S SALON<br>MANAGEMENT SYSTEM</h3></br>

          <a href="book-appointment.php" class="btn logo-button top-margin" style="background-color: #990033; color: white;">Book Your Place Now</a>
        </div>
        </div>
      </section>


    <input id="slide-2" type="radio" name="slides">
      <section class="slide " style=" background-image: url('assets/new_images/home_pic1.jpeg');">
        <div class="container">
        <div class="banner-text">
          <h4 style="color:#ffff ; font-size: 40px;">Your Types. Your Style. Your Color.<br>A place for men to relax, refresh, and refine</h4></br>
          <h3 style="color:#ffff; font-size: 50px;" >MEN'S SALON<br>MANAGEMENT SYSTEM</h3></br>

          <a href="book-appointment.php" class="btn logo-button top-margin"style="background-color: #990033; color: white;" >Book Your Place Now</a>
        </div>
        </div>
      <!-- <nav>
        <label for="slide-2" class="prev">&#10094;</label>
        <label for="slide-1" class="next">&#10095;</label>
      </nav> -->
      </section>

    <header>
      <label for="slide-1" id="slide-1"></label>
      <label for="slide-2" id="slide-2"></label>
    </header>
  </div>
</div> 

<section class="w3l-call-to-action_9">
  <div class="call-w3 ">
    <div class="container">
      <div class="grids">
        <div class="grids-content row">

          <div class="column col-lg-4 col-md-6 color-2 ">
              <div>
                  <h4 class=" " style="color: #660033; font-size: 45px;">Our salon is the most sought-after in town.</h4>
                    <p class="para " style="color: black; font-size: 20px;">Elevate your look with the best in men’s grooming at Mr.Handsome</p>
                    <a href="about.php" class="action-button btn mt-md-4 mt-3" style="color:#990033">Read more</a>
              </div>
          </div>

          <div class="column col-lg-4 col-md-6 col-sm-6 back-image  ">
              <img src="assets/new_images/homee1.jpg" alt="product" class="img-responsive " width=280px hight=280px >
          </div>
          <div class="column col-lg-4 col-md-6 col-sm-6 back-image2 ">
              <img src="assets/new_images/homee2.jpg" alt="product" class="img-responsive "  width=280px hight=280px >
          </div>
          </div>
        </div>
      </div>
    </div>
</section>


<section class="w3l-teams-15">
	<div style="background-image: url('assets/new_images/homepage.jpg');  
              padding: 130px 0px;
              no-repeat center;
              background-size: cover;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              -ms-background-size: cover;
              z-index: 0;
              position: relative;">

		<div class="container">
				<div class="column2 image-text">
					<h3 class="team-head ">Experience unparalleled relaxation at our salon.</h3>
					<p class="para  text " style="color:#660033  ; font-size :20px; font-weight: bold;">
						Best Beauty expert at your home and provides beauty salon at home. Home Salon provide well trained beauty professionals for beauty services at home including Facial, Clean Up, Bleach, Waxing,Pedicure, Manicure, etc.</p>
						<a href="book-appointment.php" class="btn logo-button top-margin mt-4" style="background-color: #990033; color: white;" >Save Your Place</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="w3l-specification-6">
    <div class="specification-layout ">
        <div class="container">
            <div class=" row">
                <div class="col-lg-6 back-image">
                    <img src="assets/new_images/homepage1.jpg" alt="product" class="img-responsive " hight=280 width= 400 >
                </div>
                <div class="col-lg-6 about-right-faq align-self">
                    <h3 class="title-big"><a href="about.html" style="color:#000033">Well-Maintained and Highly Recommended Hair Salon</a></h3>
                    <p class="mt-3 para" style="color:black"> Their array of beauty parlour services include haircuts, hair spas, colouring, texturing, styling, waxing, pedicures, manicures, threading, body spa, natural facials and more.</p>
                        <div class="hair-cut">
                            <div >
                    <ul class="w3l-right-book">
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html" style="color:#003333 ;">Hair cut with Blow dry</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html" style="color:#003333 ;">Color & highlights</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html" style="color:#003333 ;">Shampoo & Set</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html" style="color:#003333 ;">Blow Dry & Curl</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html" style="color:#003333 ;">Advance Hair Color</a></li>
                    </ul>
                </div>
                    <div  class="image-right">
                        <ul class="w3l-right-book">
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html" style="color:#003333 ;">Back Massage</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html" style="color:#003333 ;">Hair Treatment</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html" style="color:#003333 ;">Face Massage</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html" style="color:#003333 ;">Skin Care</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html" style="color:#003333 ;">Body Therapies</a></li>
                        </ul>
                </div>
            </div>
        </div>
</section>
<?php include_once('includes/footer.php');?>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top" style="background-color: #990033; color: white;">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>


<!-- /move top -->
</body>


</html>