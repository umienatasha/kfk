<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Galery</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body {
	  font-family: Arial;
	  margin: 0;
	}

	* {
	  box-sizing: border-box;
	}

	img {
	  vertical-align: middle;
	}

	/* Position the image container (needed to position the left and right arrows) */
	.container {
	  position: relative;
	}

	/* Hide the images by default */
	.mySlides {
	  display: none;
	}

	/* Add a pointer when hovering over the thumbnail images */
	.cursor {
	  cursor: pointer;
	}

	/* Next & previous buttons */
	.prev,
	.next {
	  cursor: pointer;
	  position: absolute;
	  top: 40%;
	  width: auto;
	  padding: 16px;
	  margin-top: -50px;
	  color: white;
	  font-weight: bold;
	  font-size: 20px;
	  border-radius: 0 3px 3px 0;
	  user-select: none;
	  -webkit-user-select: none;
	}

	/* Position the "next button" to the right */
	.next {
	  right: 0;
	  border-radius: 3px 0 0 3px;
	}

	/* On hover, add a black background color with a little bit see-through */
	.prev:hover,
	.next:hover {
	  background-color: rgba(0, 0, 0, 0.8);
	}

	/* Number text (1/3 etc) */
	.numbertext {
	  color: #f2f2f2;
	  font-size: 12px;
	  padding: 8px 12px;
	  position: absolute;
	  top: 0;
	}

	/* Container for image text */
	.caption-container {
	  text-align: center;
	  background-color: #222;
	  padding: 2px 16px;
	  color: white;
	}

	.row:after {
	  content: "";
	  display: table;
	  clear: both;
	}

	/* Six columns side by side */
	.column {
	  float: left;
	  width: 16.66%;
	}

	/* Add a transparency effect for thumnbail images */
	.demo {
	  opacity: 0.6;
	}

	.active,
	.demo:hover {
	  opacity: 1;
	}
	</style>

</head>
<body class="host_version"> 

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/ohana.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">Tentang Kami</a></li>
						<li class="nav-item"><a class="nav-link" href="hosting.php">Rawatan</a></li>
						<li class="nav-item active"><a class="nav-link" href="gallery.php">Galery</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Hubungi Kami</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Gambar<span class="m_1"></span></h1>
		</div>
	</div>
	
	<br>
		<div class="container">
		<center>
		  <div class="mySlides">
			<div class="numbertext">1 / 6</div>
			<img src="images/1.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">2 / 6</div>
			<img src="images/2.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">3 / 6</div>
			<img src="images/3.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">4 / 6</div>
			<img src="images/4.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">5 / 6</div>
			<img src="images/5.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">6 / 6</div>
			<img src="images/6.jpeg" style="width:60%">
		  </div>
		</center>
		
		  <a class="prev" onclick="plusSlides(-1)">❮</a>
		  <a class="next" onclick="plusSlides(1)">❯</a>

		  <div class="caption-container">
			<p id="caption"></p>
		  </div>

		  <div class="row">
			<div class="column">
			  <img class="demo cursor" src="images/1.jpeg" style="width:100%" onclick="currentSlide(1)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/2.jpeg" style="width:100%" onclick="currentSlide(2)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/3.jpeg" style="width:100%" onclick="currentSlide(3)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/4.jpeg" style="width:100%" onclick="currentSlide(4)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/5.jpeg" style="width:100%" onclick="currentSlide(5)" alt="">
			</div>    
			<div class="column">
			  <img class="demo cursor" src="images/6.jpeg" style="width:100%" onclick="currentSlide(6)" alt="">
			</div>
		  </div>
		</div>
	
			<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
				  showSlides(slideIndex += n);
				}

				function currentSlide(n) {
				  showSlides(slideIndex = n);
				}

				function showSlides(n) {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("demo");
				  var captionText = document.getElementById("caption");
				  if (n > slides.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
					  slides[i].style.display = "none";
				  }
				  for (i = 0; i < dots.length; i++) {
					  dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";
				  dots[slideIndex-1].className += " active";
				  captionText.innerHTML = dots[slideIndex-1].alt;
				}
			</script><br>
			
		<div class="container">
		 <center>
		  <div class="mySlides">
			<div class="numbertext">7 / 12</div>
			<img src="images/7.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">8 / 12</div>
			<img src="images/8.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">9 / 12</div>
			<img src="images/9.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">10 / 12</div>
			<img src="images/10.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">11 / 12</div>
			<img src="images/11.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">12 / 12</div>
			<img src="images/6.jpeg" style="width:60%">
		  </div>
		 </center>
		
		  <a class="prev" onclick="plusSlides(-1)">❮</a>
		  <a class="next" onclick="plusSlides(1)">❯</a>

		  <div class="caption-container">
			<p id="caption"></p>
		  </div>

		  <div class="row">
			<div class="column">
			  <img class="demo cursor" src="images/7.jpeg" style="width:100%" onclick="currentSlide(7)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/8.jpeg" style="width:100%" onclick="currentSlide(8)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/9.jpeg" style="width:100%" onclick="currentSlide(9)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/10.jpeg" style="width:100%" onclick="currentSlide(10)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/11.jpeg" style="width:100%" onclick="currentSlide(11)" alt="">
			</div>    
			<div class="column">
			  <img class="demo cursor" src="images/12.jpeg" style="width:100%" onclick="currentSlide(12)" alt="">
			</div>
		  </div>
		</div>
		
			<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
				  showSlides(slideIndex += n);
				}

				function currentSlide(n) {
				  showSlides(slideIndex = n);
				}

				function showSlides(n) {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("demo");
				  var captionText = document.getElementById("caption");
				  if (n > slides.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
					  slides[i].style.display = "none";
				  }
				  for (i = 0; i < dots.length; i++) {
					  dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";
				  dots[slideIndex-1].className += " active";
				  captionText.innerHTML = dots[slideIndex-1].alt;
				}
			</script><br>
			
		<div class="container">
		 <center>
		  <div class="mySlides">
			<div class="numbertext">13 / 18</div>
			<img src="images/13.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">14 / 18</div>
			<img src="images/14.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">15 / 18</div>
			<img src="images/15.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">16 / 18</div>
			<img src="images/16.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">17 / 18</div>
			<img src="images/17.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">18 / 18</div>
			<img src="images/18.jpeg" style="width:60%">
		  </div>
		 </center>
		
		  <a class="prev" onclick="plusSlides(-1)">❮</a>
		  <a class="next" onclick="plusSlides(1)">❯</a>

		  <div class="caption-container">
			<p id="caption"></p>
		  </div>

		  <div class="row">
			<div class="column">
			  <img class="demo cursor" src="images/13.jpeg" style="width:100%" onclick="currentSlide(13)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/14.jpeg" style="width:100%" onclick="currentSlide(14)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/15.jpeg" style="width:100%" onclick="currentSlide(15)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/16.jpeg" style="width:100%" onclick="currentSlide(16)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/17.jpeg" style="width:100%" onclick="currentSlide(17)" alt="">
			</div>    
			<div class="column">
			  <img class="demo cursor" src="images/18.jpeg" style="width:100%" onclick="currentSlide(18)" alt="">
			</div>
			
		  </div>
		</div>
		
			<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
				  showSlides(slideIndex += n);
				}

				function currentSlide(n) {
				  showSlides(slideIndex = n);
				}

				function showSlides(n) {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("demo");
				  var captionText = document.getElementById("caption");
				  if (n > slides.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
					  slides[i].style.display = "none";
				  }
				  for (i = 0; i < dots.length; i++) {
					  dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";
				  dots[slideIndex-1].className += " active";
				  captionText.innerHTML = dots[slideIndex-1].alt;
				}
			</script><br>

		
		<div class="container">
		 <center>
		  <div class="mySlides">
			<div class="numbertext">19 / 24</div>
			<img src="images/19.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">20 / 24</div>
			<img src="images/20.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">21 / 24</div>
			<img src="images/21.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">22 / 24</div>
			<img src="images/22.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">23 / 24</div>
			<img src="images/23.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">24 / 24</div>
			<img src="images/24.jpeg" style="width:60%">
		  </div>
		 </center>
		
		  <a class="prev" onclick="plusSlides(-1)">❮</a>
		  <a class="next" onclick="plusSlides(1)">❯</a>

		  <div class="caption-container">
			<p id="caption"></p>
		  </div>

		  <div class="row">
			<div class="column">
			  <img class="demo cursor" src="images/19.jpeg" style="width:100%" onclick="currentSlide(19)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/20.jpeg" style="width:100%" onclick="currentSlide(20)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/21.jpeg" style="width:100%" onclick="currentSlide(21)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/22.jpeg" style="width:100%" onclick="currentSlide(22)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/23.jpeg" style="width:100%" onclick="currentSlide(23)" alt="">
			</div>    
			<div class="column">
			  <img class="demo cursor" src="images/24.jpeg" style="width:100%" onclick="currentSlide(24)" alt="">
			</div>
			
		  </div>
		</div>
		
			<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
				  showSlides(slideIndex += n);
				}

				function currentSlide(n) {
				  showSlides(slideIndex = n);
				}

				function showSlides(n) {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("demo");
				  var captionText = document.getElementById("caption");
				  if (n > slides.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
					  slides[i].style.display = "none";
				  }
				  for (i = 0; i < dots.length; i++) {
					  dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";
				  dots[slideIndex-1].className += " active";
				  captionText.innerHTML = dots[slideIndex-1].alt;
				}
			</script><br>
			
			<div class="container">
		 <center>
		  <div class="mySlides">
			<div class="numbertext">25 / 30</div>
			<img src="images/25.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">26 / 30</div>
			<img src="images/26.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">27 / 30</div>
			<img src="images/27.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">28 / 30</div>
			<img src="images/28.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">29 / 30</div>
			<img src="images/29.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">30 / 30</div>
			<img src="images/30.jpeg" style="width:60%">
		  </div>
		 </center>
		
		  <a class="prev" onclick="plusSlides(-1)">❮</a>
		  <a class="next" onclick="plusSlides(1)">❯</a>

		  <div class="caption-container">
			<p id="caption"></p>
		  </div>

		  <div class="row">
			<div class="column">
			  <img class="demo cursor" src="images/25.jpeg" style="width:100%" onclick="currentSlide(25)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/26.jpeg" style="width:100%" onclick="currentSlide(26)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/27.jpeg" style="width:100%" onclick="currentSlide(27)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/28.jpeg" style="width:100%" onclick="currentSlide(28)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/29.jpeg" style="width:100%" onclick="currentSlide(29)" alt="">
			</div>    
			<div class="column">
			  <img class="demo cursor" src="images/30.jpeg" style="width:100%" onclick="currentSlide(30)" alt="">
			</div>
			
		  </div>
		</div>
		
			<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
				  showSlides(slideIndex += n);
				}

				function currentSlide(n) {
				  showSlides(slideIndex = n);
				}

				function showSlides(n) {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("demo");
				  var captionText = document.getElementById("caption");
				  if (n > slides.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
					  slides[i].style.display = "none";
				  }
				  for (i = 0; i < dots.length; i++) {
					  dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";
				  dots[slideIndex-1].className += " active";
				  captionText.innerHTML = dots[slideIndex-1].alt;
				}
			</script><br>


	<br>
	
     <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                        <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="pricing.php">Pricing</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.facebook.com</a></li>
                            <li> Pusat Bandar Kangar, 01000 Kangar, Perlis</li>
                            <li>+604-976 7366</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->


    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>