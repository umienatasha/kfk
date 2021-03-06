<?php
session_start();

$mysqli = new mysqli('localhost', 'root', "", 'ohana');
if (isset($_GET['date'])) {
    $date = $_GET['date'];
    $stmt = $mysqli->prepare("SELECT * FROM bookings where date = ?");
    $stmt->bind_param('s', $date);
    $bookings = array();
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 5) {
            while ($row = $result->fetch_assoc()) {
                $bookings[] = $row['timeslot'];
            }
            $stmt->close();
        }
    }
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $timeslot = $_POST['timeslot'];
    $stmt = $mysqli->prepare("select * from bookings where date = ? AND timeslot = ?");
    $stmt->bind_param('ss', $date, $timeslot);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 5) {
            $msg = "<div class='alert alert-danger'>Already Booked</div>";
        } else {
            $stmt = $mysqli->prepare("INSERT INTO bookings (name, gender, phone, email, comment, date ,timeslot) VALUES (?,?,?,?,?,?,?)");
            $stmt->bind_param('sssssss', $name, $gender, $phone, $email, $comment, $date, $timeslot);
            $stmt->execute();
            $msg = "<div class='alert alert-success'>Booking Successful
			
			<script>
				window.location='viewbooking.php';
			</script>
			
			</div>";
            $bookings[] = $timeslot;
            $stmt->close();
            $mysqli->close();
        }
    }
}

$duration = 60;
$cleanup = 0;
$start = "8:00";
$end = "17:00";

function timeslots($duration, $cleanup, $start, $end) {
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new DateInterval("PT" . $duration . "M");
    $cleanupInterval = new DateInterval("PT" . $cleanup . "M");
    $slots = array();

    for ($intStart = $start; $intStart < $end; $intStart->add($interval)->add($cleanupInterval)) {
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);
        if ($endPeriod > $end) {
            break;
        }

        $slots[] = $intStart->format("H:iA") . "-" . $endPeriod->format("H:iA");
    }
    return $slots;
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
    <title>Time Slot</title>  
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
	
	<style>
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 8px;
	}

	tr:nth-child(even) {
	  background-color: #dddddd;
	}
	</style>

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				
			</div>
		</div>
	  </div>
	</div>

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
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Patient </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">								
								<a class="dropdown-item" href="viewpatient.php">Details Patient </a>								
							</div>
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Bookings </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">							
								<a class="dropdown-item" href="viewbooking.php">View Treatments Booking</a>								
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Booking Appointment<span class="m_1"></span></h1>
		</div>
	</div>
	
	<div id="page-container" class="main-admin">
            <div class="container-fluid" id="main">
					<center>
                    <div class="col-md-9 col-lg-10 main">
						
                        <hr>
                        <div class="container">
                            <h1 class="text-center">Book for Date: <?php echo date('d/m/Y', strtotime($date)); ?></h1>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <?php echo (isset($msg)) ? $msg : ""; ?>
                                </div>
                                <?php
                                $timeslots = timeslots($duration, $cleanup, $start, $end);
                                foreach ($timeslots as $ts) {
                                    ?>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <?php if (in_array($ts, $bookings)) { ?>
                                                <button class="btn btn-danger"><?php echo $ts; ?></button>
                                            <?php } else { ?>
                                                <button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
				</center>
			
	<form action="" method="POST">
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Booking: <span id="slot"></span></h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for=""><strong>Time Slot</strong></label>
											<input type="text" readonly name="timeslot" id="timeslot" class="form-control" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for=""><strong>Full Name</strong></label>
											<input type="text" name="name" class="form-control" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for=""><strong>Jantina</strong></label>
											<select class="form-control" name="gender" id="gender" required> 
												<option value="" disabled selected hidden>Pilih Jantina</option>
												<option value="Lelaki">Lelaki</option>
												<option value="Perempuan">Perempuan</option>
											</select>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for=""><strong>Number Telefon</strong></label>
											<input type="number" name="phone" class="form-control" required>
										</div>
									</div>	
									<div class="col-md-12">
										<div class="form-group">
											<label for=""><strong>E-Mel</strong></label>
											<input type="text" name="email" class="form-control" required>
										</div>
									</div>	
									<div class="col-md-12">
										<div class="form-group">
											<label for=""><strong>Nyatakan</strong></label>
											<input type="text" name="comment" class="form-control" required>
										</div>
										<div class="form-group pull-right">
											<a href="viewbooking.php"><button type="submit" class="btn btn-primary" name="submit">Submit</button></a>
										</div>
									</div>
								</div> 
							</div>
						</div>
					</div>
				</div>
				
			</form>
		   <hr>

		</div>
			<hr>
		</div>
		</center>
		
		<script>
			// sandbox disable popups
			if (window.self !== window.top && window.name != "view1") {
				window.alert = function () {
					/*disable alert*/
				};
				window.confirm = function () {
					/*disable confirm*/
				};
				window.prompt = function () {
					/*disable prompt*/
				};
				window.open = function () {
					/*disable open*/
				};
			}

			// prevent href=# click jump
			document.addEventListener(
					"DOMContentLoaded",
					function () {
						var links = document.getElementsByTagName("A");
						for (var i = 0; i < links.length; i++) {
							if (links[i].href.indexOf("#") != -1) {
								links[i].addEventListener("click", function (e) {
									console.debug("prevent href=# click");
									if (this.hash) {
										if (this.hash == "#") {
											e.preventDefault();
											return false;
										} else {
											/*
											 var el = document.getElementById(this.hash.replace(/#/, ""));
											 if (el) {
											 el.scrollIntoView(true);
											 }
											 */
										}
									}
									return false;
								});
							}
						}
					},
					false
					);
		</script>
		<!--scripts loaded here-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

		<script>
			$(document).ready(function () {
				$("[data-toggle=offcanvas]").click(function () {
					$(".row-offcanvas").toggleClass("active");
				});
			});
		</script>
		<script>
			$(".book").click(function () {
				var timeslot = $(this).attr('data-timeslot');
				$("#slot").html(timeslot);
				$("#timeslot").val(timeslot);
				$("#myModal").modal("show");
			});
		</script>
		
		
		
		
		<script>
			// sandbox disable popups
			if (window.self !== window.top && window.name != "view1") {
				window.alert = function () {
					/*disable alert*/
				};
				window.confirm = function () {
					/*disable confirm*/
				};
				window.prompt = function () {
					/*disable prompt*/
				};
				window.open = function () {
					/*disable open*/
				};
			}

			// prevent href=# click jump
			document.addEventListener(
					"DOMContentLoaded",
					function () {
						var links = document.getElementsByTagName("A");
						for (var i = 0; i < links.length; i++) {
							if (links[i].href.indexOf("#") != -1) {
								links[i].addEventListener("click", function (e) {
									console.debug("prevent href=# click");
									if (this.hash) {
										if (this.hash == "#") {
											e.preventDefault();
											return false;
										} else {
											/*
											 var el = document.getElementById(this.hash.replace(/#/, ""));
											 if (el) {
											 el.scrollIntoView(true);
											 }
											 */
										}
									}
									return false;
								});
							}
						}
					},
					false
					);
		</script>
		<!--scripts loaded here-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

		<script>
			$(document).ready(function () {
				$("[data-toggle=offcanvas]").click(function () {
					$(".row-offcanvas").toggleClass("active");
				});
			});
		</script>
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