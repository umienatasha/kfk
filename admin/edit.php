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


$id_patient=$_GET["id"];

$dis_usr="SELECT * FROM tblpatient WHERE id_patient='$id_patient'";
$resultusr=$conn->query($dis_usr);

$row=$resultusr->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Update Patient</title> 
	

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
						<li class="nav-item"><a class="nav-link" href="admin.php">Home</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">About Ohana </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="about.php">Latar Belakang</a>
								<a class="dropdown-item" href="hosting.php">List Treatments</a>
								<a class="dropdown-item" href="gallery.php">Gallery</a>
							</div>
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Patient </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">							
								<a class="dropdown-item" href="viewpatient.php">Details Patient </a>								
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Bookings </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="viewbooking.php">Treatments Booking</a>								
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

<br>
<br>
	<div class="row justify-content-md-center">
		<div class="col col-md-8">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							Edit Profile Details
						</div>
						<div class="col-md-6 text-right">
							<a href="display.php?id=<?php echo $row["id_patient"]; ?>" class="btn btn-secondary btn-sm">View</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form method="post" action="updatepatient.php">
						<div class="form-group">
							<label><strong>Patient Name</strong><span class="text-danger">*</span></label>
							<input type="text" name="name"  class="form-control" value="<?php echo $row["name"];?>" required autofocus data-parsley-type="name" data-parsley-trigger="keyup" readonly />
						</div>
						<div class="form-group">
							<label><strong>Patient Email</strong><span class="text-danger">*</span></label>
							<input type="text" name="email" class="form-control" value="<?php echo $row["email"];?>" required  data-parsley-trigger="keyup" />
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Identity Card</strong><span class="text-danger">*</span></label>
									<input type="text" name="ic" class="form-control" value="<?php echo $row["ic"];?>" required  data-parsley-trigger="keyup" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Username</strong><span class="text-danger">*</span></label>
									<input type="text" name="username" class="form-control" value="<?php echo $row["username"];?>" required  data-parsley-trigger="keyup" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Patient Contact No.</strong><span class="text-danger">*</span></label>
									<input type="number" name="phone" class="form-control" value="<?php echo $row["phone"];?>" required  data-parsley-trigger="keyup" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Patient Gender</strong><span class="text-danger">*</span></label>
									<select name="gender" class="form-control" value="<?php echo $row["gender"];?>" >
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Other">Other</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label><strong>Patient Complete Address</strong><span class="text-danger">*</span></label>
							<input type="text" name="address" class="form-control" value="<?php echo $row["address"];?>" required data-parsley-trigger="keyup"></textarea>
						</div>
						<div class="form-group text-center">
							<input type="submit" class="btn btn-primary" value="Update" />
							<input type="hidden" name="id" value="<?php echo $row["id_patient"]; ?>"/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<br>
	<br>


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