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

$idusr=$_GET["id"];

$dis_usr="SELECT * FROM tbl_cuti_umum WHERE id_cuti_umum='$idusr'";
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
    <title>Update Public Holiday</title> 
	

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
						<li class="nav-item"><a class="nav-link" href="viewpatient.php">List Patient</a></li>
						<li class="nav-item"><a class="nav-link" href="viewbooking.php">List Appointment</a></li>
						<li class="nav-item active"><a class="nav-link" href="cuti.php">Public Holiday</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="dropdown-a" data-toggle="dropdown"><strong>Welcome, <?php echo $_SESSION['username'];?></b> !</strong> </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="#">Profile</a>
								<a class="dropdown-item" href="logout.php">Logout </a>
							</div>
						</li>
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
							Edit Public Holiday
						</div>
						<div class="col-md-6 text-right">
							<a href="viewcuti.php?id=<?php echo $row["id_cuti_umum"]; ?>" class="btn btn-secondary btn-sm">View</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form method="post" action="updateprocuti.php">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Date Holiday</strong><span class="text-danger">*</span></label>
									<input type="date" name="tarikh"  class="form-control" value="<?php echo $row["tarikh"];?>" required autofocus data-parsley-trigger="keyup"b/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label><strong>Reason Holiday</strong><span class="text-danger">*</span></label>
							<input type="text" name="sebab" class="form-control" value="<?php echo $row["sebab"];?>" required  data-parsley-trigger="keyup" />
						</div>

						<div class="form-group text-center">
							<input type="submit" class="btn btn-primary" value="Update" />
							<input type="hidden" name="id" value="<?php echo $row["id_cuti_umum"]; ?>"/>
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
