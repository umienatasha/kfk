<?php
session_start();
include 'connection.php';

if(isset($_SESSION['user_data'])){
	if($_SESSION['user_data']['user_type']=='admin'){
		header("Location:index.php");
	}
	elseif($_SESSION['user_data']['user_type']=='instructor'){
		header("Location:instructor/index.php");	
	}
}
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Login</title> 
	
	<script type="text/javascript">
				function validate(){
				var uname=document.myForm.username.value;
				if(uname==""){
						alert("Please enter username");
						document.myForm.username.focus();
						return false;
					}
					var password=document.myForm.password.value;
					var illegalChar=/[\w_]/;
					if(password==""){
						alert("Please enter password");
						document.myForm.password.focus();
						return false;
					}
				} 
    </script> 
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
						<li class="nav-item active"><a class="nav-link" href="login.php">Log Masuk</a></li>
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
                    <h3>Log Masuk</h3>
                </div>
            </div><!-- end title -->
			
			<div id="overviews" class="section lb">
			<div class="container">
			<div class="row">
                    <?php if(isset($_REQUEST['error'])){ ?>
                        <div class="col-lg-12">
                            <center><span class="alert alert-danger" style="display: block;"><?php echo $_REQUEST['error']; ?></span></center>
                    </div>
                    <?php } ?>
                </div>
			<div class="col-lg-12">
			
					<form action="logprocess.php" class="form" name="myForm" method="post">
										
						<div class="form-group">
							<label><strong>Username</strong></label>
							<input type="text" name="username" class="form-control" placeholder="Masukkan Nama Pengguna" required />
						</div>
						
						<div class="form-group">
							<label><strong>Kata Laluan</strong></label>
							<input type="password" name="password" class="form-control" placeholder="Masukkan Kata Laluan" required />
						</div>
					
						
							<div class="form-group">
									<input type="submit" id="submit-btn" name="action" onClick="return validate();"  class="btn btn-info btn-md" value="Login">
																															
							</div>
								
						
					
					</form>	
				</div>
			</div><!-- end container -->
			</div><!-- end section -->
		</div>
	</section>


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