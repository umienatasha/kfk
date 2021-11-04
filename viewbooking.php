<?php
include('connection.php');

$id_patient=$_SESSION['id_patient'];

$sql = "SELECT * FROM bookings WHERE id_patient='$id_patient'";
$result = mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
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
	
	<style type="text/css">
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
	
	body,
            html {
                height: 100%;
            }
            /* workaround modal-open padding issue */

            body.modal-open {
                padding-right: 0 !important;
            }

            #sidebar {
                padding-left: 0;
            }
            nav-item dropdown {
                position: relative;
            }
            .navbar ul.navbar-nav li.nav-item.ets-right-0 .dropdown-menu{
                left: auto;
                right: 0;
                position: absolute;
            } 
            /*
         * Off Canvas at medium breakpoint
         * --------------------------------------------------
         */

            @media screen and (max-width: 48em) {
                .row-offcanvas {
                    position: relative;
                    -webkit-transition: all 0.25s ease-out;
                    -moz-transition: all 0.25s ease-out;
                    transition: all 0.25s ease-out;
                }
                .row-offcanvas-left .sidebar-offcanvas {
                    left: -33%;
                }
                .row-offcanvas-left.active {
                    left: 33%;
                    margin-left: -6px;
                }
                .sidebar-offcanvas {
                    position: absolute;
                    top: 0;
                    width: 33%;
                    height: 100%;
                }
            }
            /*
         * Off Canvas wider at sm breakpoint
         * --------------------------------------------------
         */

            @media screen and (max-width: 34em) {
                .row-offcanvas-left .sidebar-offcanvas {
                    left: -45%;
                }
                .row-offcanvas-left.active {
                    left: 45%;
                    margin-left: -6px;
                }
                .sidebar-offcanvas {
                    width: 45%;
                }
            }

            .card {
                overflow: hidden;
            }

            .card-block .rotate {
                z-index: 8;
                float: right;
                height: 100%;
            }

            .card-block .rotate i {
                color: rgba(20, 20, 20, 0.15);
                position: absolute;
                left: 0;
                left: auto;
                right: -10px;
                bottom: 0;
                display: block;
                -webkit-transform: rotate(-44deg);
                -moz-transform: rotate(-44deg);
                -o-transform: rotate(-44deg);
                -ms-transform: rotate(-44deg);
                transform: rotate(-44deg);
            }
            table {
                table-layout:fixed;
            }

            td {
                width:33%;
            }

            .today {
                background:yellow;
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
						<li class="nav-item"><a class="nav-link" href="booking.php">Book Appointment</a></li>																									
						<li class="nav-item active"><a class="nav-link" href="viewbooking.php">My Appointment</a></li>																									
						<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>										
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Papar Tempahan Rawatan<span class="m_1"></span></h1>
		</div>

	
	<section class="page-section">
		<div class="container">
			<div id="overviews" class="section lb">
			<div class="container">			
				<table id="appointment_list_table" class="table table-striped">
                                    
					<tr>
					<thead>                        
					<th><center>ID</center></th>
					<th><center>DATE</center></th>
					<th><center>TIME SLOT</center></th>
					<th><center>PATIENT NAME</center></th>
					<th><center>GENDER</center></th>
					<th><center>NUMBER PHONE</center></th>
					<th><center>EMAIL</center></th>
					<th><center>NYATAKAN</center></th>
					</thead>

					<?php
						if(mysqli_num_rows($result) > 0)
						{
						while($row = mysqli_fetch_assoc($result)) // cara declare row
						{											

					?>
					
					<tr>
							<td><?php echo $row['id_book'];?></td>                                            
							<td><?php echo $row['date']; ?></td>  
							<td><?php echo $row['timeslot']; ?></td>
							<td><?php
							$med_id=$row["id_book"];
							
								$sql = "SELECT tblpatient.id_patient, tblpatient.username FROM tblpatient, bookings WHERE tblpatient.id_patient=bookings.id_patient and bookings.id_book='$med_id'";
								$result = mysqli_query($conn, $sql);
								
								if(mysqli_num_rows($result)>0)
								{
									while($row2 = mysqli_fetch_assoc($result)){
										
										 echo $row2['username']; 
										
								}
								}
							?>	</td>
							<td><?php echo $row['gender']; ?></td>  
							<td><?php echo $row['phone']; ?></td>  
							<td><?php echo $row['email']; ?></td>  
							<td><?php echo $row['comment']; ?></td>					
						</tr>
					<?php
						   }
						}
						else 
						{
						   echo "0 results";
						}

						mysqli_close($conn);
					?>
				</table>
				
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