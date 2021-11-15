<?php
include('connection.php');
 if(!isset($_SESSION["id_patient"])) {
        //  header("Location: login.php");
		print_r($_SESSION);
        exit();
    }
	
$id_patient=$_SESSION['id_patient'];
$sql = "SELECT  * FROM tblpatient WHERE id_patient='$id_patient' ";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result); // cara declare row
$username=$row['username'];

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
						<li class="nav-item active"><a class="nav-link" href="timeslot.php">Book Appointment</a></li>																									
						<li class="nav-item"><a class="nav-link" href="viewbooking.php">My Appointment</a></li>																									
						<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>											
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	<br>
		<center><h1 class="my-5">Hey, <?php echo $username; ?>!</b>.</h1></center>
	
	<div id="page-container" class="main-admin">
		<div class="container-fluid" id="main">
			<div class="row justify-content-md-center">
				<div class="col col-md-10">
					<div class="card">
						<div class="card-body">
							<form method="post" action="maklumat.php">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label><strong>Tarikh</strong><span class="text-danger"></span></label>
											<input type="date" name="date" class="form-control" data-parsley-trigger="keyup" required />
										</div>
									</div>
								</div>
									
				<div class="card-body">
		      		<table class="table table-striped table-bordered" >
						<thead>
			      			<tr>
			      				<th><strong>Bilangan</th>
			      				<th><strong>Slot</th>
			      				<th><strong>Pilih</th>
			      			</tr>
						</thead>
							<tr >
								 <td>1</td>
								 <td label for="9 am - 10 am" >09:00 am</label></td>
								 <td><input type="radio"  name="timeslot" value="09:00 am"required /></td>
							</tr> 
							
							<tr >
								 <td>2</td>
								 <td label for="10 am - 11 am">10:00 am</label></td>
								 <td><input type="radio"  name="timeslot" value="10:00 am"></td>
							</tr>
							
							<tr>
								 <td>3</td>
								 <td label for="11 am - 12 pm">11:00 am</label></td>
								 <td><input type="radio"  name="timeslot" value="11:00 am"></td>
							</tr>

							<tr>
								 <td>4</td>
								 <td label for="12 pm - 1 pm">12:00 pm</label></td>
								 <td><input type="radio"  name="timeslot" value="12:00 pm"></td>
							</tr>

							<tr >
								 <td>5</td>
								 <td label for="2 pm - 3 pm">02:00 pm</label></td>
								 <td><input type="radio"  name="timeslot" value="02:00 pm"></td>
							</tr>

							<tr >
								 <td>6</td>
								 <td label for="3 pm - 4 pm">03:00 pm</label></td>
								 <td><input type="radio"  name="timeslot" value="03:00 pm"></td>
							</tr>

							<tr>
								 <td>7</td>
								 <td label for="4 pm - 5 pm">04:00 pm</label></td>
								 <td><input type="radio"  name="timeslot" value="04:00 pm"></td>
							</tr>
							
							<tr>
								 <td>8</td>
								 <td label for="5 pm - 6 pm">05:00 pm</label><br></td>
								 <td><input type="radio"  name="timeslot" value="05:00 pm"></td>
							</tr>	
			      	</table>
					
					<center><button type="submit" class="btn btn-primary" name="submit">Seterusnya</button>
			    </div>
									
							</form>
						</div>
					</div>
				</div>
			</div>
			   <hr>
		</div>
				<hr>
	</div>
			
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