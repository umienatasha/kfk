<?php
session_start();

$conn = mysqli_connect('localhost', 'root' );

$db = mysqli_select_db($conn, 'ohana');

$sql = "SELECT * FROM tblpatient";
$result = mysqli_query($conn, $sql);

?>

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `tblpatient` WHERE CONCAT(`id_patient`,`name`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `tblpatient`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $conn = mysqli_connect("localhost", "root", "", "ohana");
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
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
			
			 /*
			 * table
			 * --------------------------------------------------
			 */
		 
			.styled-table {
				border-collapse: collapse;
				margin: 25px 0;
				font-size: 0.9em;
				font-family: sans-serif;
				min-width: 400px;
				box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
			}
			
			.styled-table thead tr {
				background-color: #009879;
				color: #ffffff;
				text-align: left;
			}
			
			.styled-table th,
			.styled-table td {
				padding: 12px 15px;
			}
			
			.styled-table tbody tr {
				border-bottom: 1px solid #dddddd;
			}

			.styled-table tbody tr:nth-of-type(even) {
				background-color: #f3f3f3;
			}

			.styled-table tbody tr:last-of-type {
				border-bottom: 2px solid #009879;
			}
			
			.styled-table tbody tr.active-row {
				font-weight: bold;
				color: #009879;
			}
			
			table, th, td {
			  border: 1px solid black;
			  border-collapse: collapse;
			}

			 table,tr,th,td
            {
                border: 1px solid black;
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
						<li class="nav-item active"><a class="nav-link" href="viewpatient.php">List Patient</a></li>
						<li class="nav-item"><a class="nav-link" href="viewbooking.php">List Appointment</a></li>
						<li class="nav-item"><a class="nav-link" href="cuti.php">Public Holiday</a></li>
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

	<div class="col-lg-12">
	<form action="viewpatient.php" method="post" class="checkdomain form-inline" >
		<div class="checkdomain-wrapper">
			<div class="form-group">
				<label class="sr-only" for="domainnamehere">Domain name</label>
				<input type="text" class="form-control" id="domainnamehere" name="valueToSearch" placeholder="Enter Name">
				<button type="submit" name="search" value="Filter" class="btn btn-primary grd1"><i class="fa fa-search"></i></button>
			</div>
			<hr>
	
		</div><!-- end checkdomain-wrapper -->
                      
	
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="appointment_list_table">
					<thead>
						<tr>
							<th><strong>ID</th>
							<th><strong>NAME</th>
							<th><strong>IDENTITY CARD</th>						
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
					<?php while($row = mysqli_fetch_array($search_result)):?>
						<tr class="row100">
							<td><?php echo $row['id_patient']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['ic']; ?></td>														
							<td>				
								<center>												
								<button><a href="display.php?id=<?php echo $row["id_patient"]; ?>" class="btn btn-danger delete-listview-btn" onClick="return confirm">Detail</a></button>
								<button><a href="deletepatient.php?id=<?php echo $row["id_patient"]; ?>" class="btn btn-danger delete-listview-btn" onClick="return confirm('Do you really want to delete?');">Delete</a></button>
								
								</center>	
							</td>
						</tr>	
							<?php endwhile;?>							
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
						
				</table>
			</div>
		</div>
	</form>
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