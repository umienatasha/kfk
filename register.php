<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ohana";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}


    // When form submitted, insert values into the database.
    if (isset($_REQUEST['ic'])) {
        // removes backslashes
        $email    = stripslashes($_REQUEST['email']);
		//escapes special characters in a string
        $email    = mysqli_real_escape_string($conn, $email);
		$phone = stripslashes($_REQUEST['phone']);
        $phone = mysqli_real_escape_string($conn, $phone);
		$address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($conn, $address);
		$gender = stripslashes($_REQUEST['gender']);
        $gender = mysqli_real_escape_string($conn, $gender);
		$name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($conn, $name);
		$ic = stripslashes($_REQUEST['ic']);
        $ic = mysqli_real_escape_string($conn, $ic);
		$password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `tblpatient` ( email, phone, address, gender, name, ic, password, create_datetime)
                     VALUES ( '$email', '$phone', '$address', '$gender', '$name', '$ic', '$password', '$create_datetime')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <script>
					window.location='login.php';
				</script>
                  </div>";
        } 
    } else {
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Register</title> 
	

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
						<li class="nav-item active"><a class="nav-link" href="register.php">Daftar</a></li>

					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	
	<section class="page-section">
		<div class="container">
			 <div class="section-title row text-center">
			 <div class="col-md-8 offset-md-2">
                    <h3>Daftar</h3>
                </div>
            </div><!-- end title -->
			
			<div id="overviews" class="section lb">
			<div class="container">
			<div class="col-lg-12">
					<form action="" method="post">
										
						<div class="form-group">
							<label><strong>Nama Penuh</strong></label>
							<input type="text" name="name" class="form-control"  placeholder="Masukkan Nama Penuh" required />
						</div>				
						
						<div class="form-group">
							<label><strong>E-Mel</strong></label>
							<input type="text" name="email" class="form-control"  placeholder="Masukkan Kata Laluan" required />
						</div>

						<div class="form-group">
							<label><strong>Number Phone</strong></label>
							<input type="number" name="phone" class="form-control"  placeholder="Masukkan Number Telefon" required />
						</div>
						
						<div class="form-group">
							<label><strong>Kad Pengenalan</strong></label>
							<input type="text" name="ic" class="form-control"  placeholder="Masukkan Kad Pengenalan" required />
						</div>
						
						<div class="form-group">
							<label><strong>Address</strong></label>
							<input type="text" name="address" class="form-control"  placeholder="Masukkan Alamat Terkini Anda" required />
						</div>
						
						<div class="form-group">
							<label><strong>Patient Gender</strong><span class="text-danger"></span></label>
							<select name="gender" id="gender" class="form-control" required />
							    <option value="" disabled selected hidden>Pilih Jantina</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						
						<div class="form-group">
							<label><strong>Kata Laluan</strong></label>
							<input type="password" name="password" class="form-control"  placeholder="Masukkan Kata Laluan" required />
						</div>
						
						
						<div class="form-group">
									<input type="submit" name="submit" value="Register"  class="btn btn-info btn-md">
									<p>Sudah Mempunyai Akaun ? <a href="login.php">Login</a>.<p>																						
							</div>
					
					</form>
				</div>
			</div><!-- end container -->
			</div><!-- end section -->
		</div>
	</section>
	<?php
		}
	?>

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
							<li><a href="about.php">Tentang Kami</a></li>
							<li><a href="hosting.php">Rawatan</a></li>
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
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
	
</body>
</html>