<?php
include('connection.php');

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
						<li class="nav-item active"><a class="nav-link" href="booking.php">Book Appointment</a></li>																									
						<li class="nav-item"><a class="nav-link" href="viewbooking.php">My Appointment</a></li>																									
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
							<strong>Maklumat Diri</strong>
						</div>
					</div>
				</div>
				
				<div class="card-body">
					<form method="post" action="regmaklumat.php">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Tarikh</strong><span class="text-danger"></span></label>
									<input type="text" readonly name="date" class="form-control"   data-parsley-trigger="keyup" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Masa</strong><span class="text-danger"></span></label>
									<input type="text" readonly name="timeslot" class="form-control" value=""  data-parsley-trigger="keyup" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label><strong>Nama</strong><span class="text-danger">*</span></label>
							<input type="text" name="name"  class="form-control" value="" autofocus data-parsley-type="name" data-parsley-trigger="keyup" required />
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Kad Pengenalan</strong><span class="text-danger">*</span></label>
									<input type="text" name="ic" class="form-control" value="" required  data-parsley-trigger="keyup" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>E-mel</strong><span class="text-danger"> * jika ada</span></label>
									<input type="text" name="email" class="form-control" value=""  data-parsley-trigger="keyup" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Nombor Telefon</strong><span class="text-danger">*</span></label>
									<input type="number" name="phone" class="form-control" value="" required  data-parsley-trigger="keyup" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Jantina</strong><span class="text-danger">*</span></label>
									<select name="gender" class="form-control" value="" >
										<option value="Lelaki">Lelaki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label><strong>Alamat Tetap Terkini</strong><span class="text-danger">*</span></label>
							<input type="text" name="address" class="form-control" value="" required data-parsley-trigger="keyup"></textarea>
						</div>
						<div class="form-group">
							<label><strong>Jenis Penyakit</strong><span class="text-danger">*</span></label>
							<input type="text" name="comment" class="form-control" value="" required data-parsley-trigger="keyup"></textarea>
						</div>
						<div class="form-group pull-right">
								<a href="viewbooking.php"><button type="submit" class="btn btn-primary" name="submit">Tempah</button></a>
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