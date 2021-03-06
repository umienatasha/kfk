<?php
include('connection.php');

$id_patient=$_SESSION['id_patient'];

$sql = "SELECT * FROM bookings WHERE id_patient='$id_patient'";
$result = mysqli_query($conn, $sql);
?>


<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Papar Tempahan Rawatan</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

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
    <link rel="stylesheet" href="css/table.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	

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
						<li class="nav-item"><a class="nav-link" href="slot.php">Book Appointment</a></li>																									
						<li class="nav-item active"><a class="nav-link" href="viewbooking.php">My Appointment</a></li>																									
						<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>										
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<div class="col-lg-12">
	<form action="viewpatient.php" method="post" class="checkdomain form-inline" >
                      	
	<div class="card-body">
	<div class="table-responsive">
		<table class="table table-striped table-bordered" id="appointment_list_table">
			<thead>
			<div class="card-body">
				<div class="table-responsive">
		      		<table class="table table-striped table-bordered" id="appointment_list_table">
		      			<thead>
			      			<tr>
			      				<th><strong>DATE</th>
			      				<th><strong>TIME SLOT</th>
			      				<th><strong>PATIENT NAME</th>
			      				<th><strong>ACTION</th>
			      			</tr>
			      		</thead>
						
						<?php
							if(mysqli_num_rows($result) > 0)
							{
							while($row = mysqli_fetch_assoc($result))
							{											

						?>
						
						<tbody>
						
							<tr class="row100">
								<td><?php echo $row['date']; ?></td>
								<td><?php echo $row['timeslot']; ?></td>
								<td><?php echo $row['name']; ?></td>
								
								<td>				
									<center>												
									<button><a href="display.php?id=<?php echo $row["id_book"]; ?>" class="btn btn-danger delete-listview-btn" onClick="return confirm">View</a></button>
									</center>	
								</td>
							</tr>					
						</tbody>
						
						<?php
							   }
							}
							else 
							{
							   echo "0 results";
							}

							mysqli_close($conn);
						?>
						
			      		<tbody></tbody>
			      	</table>
			    </div>
			</div>
				</thead>
						
						
		</table>
	</div>
	</div>
 </form>
                </div> 
	
	
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