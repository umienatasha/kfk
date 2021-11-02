<?php

function build_calendar($month, $year) {
    $mysqli = new mysqli('localhost', 'root', "", 'driveschedule');
    $stmt = $mysqli->prepare("select * from bookings where MONTH(date) = ? AND YEAR(date)=?");
    $stmt->bind_param('ss', $month, $year);
    $bookings = array();
    if ($stmt-> execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $booking[] = $row['date'];
            }
            $stmt->close();
        }
    }
    $daysOfWeek = array('SUNDAY', 'MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY');
    $firstDayOfMonth = mktime(0,0,0, $month, 1, $year);
    $numberDays = date('t', $firstDayOfMonth);
    $dateComponents = getdate($firstDayOfMonth);
    $monthName = $dateComponents['month'];
    $dayOfWeek = $dateComponents['wday'];
    $datetoday = date('Y-m-d');
    
    $calendar = "<table class='table table-bordered'>"; 
    $calendar .= "<center><h2>$monthName $year</h2>";
    $calendar.="<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month-1, 1,
            $year))."&year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Previous Month</a> ";
    
    $calendar.=" <a class='btn btn-xs btn-primary' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a> ";
    
    $calendar.="<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0,$month+1, 1,
            $year))."&year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."'>Next Month</a></center><br>";
    
    $calendar .= "<tr>";
    foreach ($daysOfWeek as $day) {
        $calendar .= "<th class='header'>$day</th>";
    }
    
    $currentDay = 1;
    $calendar .= "</tr><tr>";
    
    if ($dayOfWeek > 0) {
        for ($k=0;$k<$dayOfWeek;$k++) {
            $calendar .= "<td class='empty'></td>";
        }
    }
    $month = str_pad($month, 2, "0", STR_PAD_LEFT);
    while ($currentDay <= $numberDays) {
        //if seventh colomn (saturday) reached, start a new row
        if ($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }

        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
        $date = "$year-$month-$currentDayRel";
        
        $dayname = strtolower(date('l', strtotime($date)));
        $eventNum = 0;
        $today = $date==date('Y-m-d')?"today":"";
        if($dayname=='monday'){
            $calendar.="<td><h4>$currentDay</h4><button class='btn btn-info btn-xs'>JPJ Test</button>";
        }
        elseif($date<date('Y-m-d')){
            $calendar.="<td><h4>$currentDay</h4><button class='btn btn-danger btn-xs'>N/A</button>";
        } else {
            $totalbookings = checkSlots($mysqli,$date);
            if($totalbookings==9){
                $calendar.="<td class='$today'><h4>$currentDay</h4><a href='#' class='btn btn-danger btn-xs'>N/A</a>";    
            } else{
                $calendar.="<td class='$today'><h4>$currentDay</h4><a href='timeslot.php?date=".$date."'
                    class='btn btn-success btn-xs'>Book</a>"; 
            }
        }
        
        $calendar .= "</td>";
        $currentDay++;
        $dayOfWeek++;
    }
    if ($dayOfWeek != 7) {
        $remainingDays = 7 - $dayOfWeek;
        for ($l=0;$l<$remainingDays;$l++) {
            $calendar .= "<td class='empty'></td>";
        }
    }
    $calendar .= "</tr>";
    $calendar .= "</table>";
    echo $calendar;
}

function checkSlots($mysqli,$date){
    $stmt = $mysqli->prepare("select * from bookings where date = ?");
    $stmt->bind_param('s', $date);
    $totalbookings = 0;
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $totalbookings++;
            }
            $stmt->close();
        }
    }
    return $totalbookings;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Booking</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <style type="text/css">
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
    <body>
        <div id="page-container" class="main-admin">
            <nav class="navbar navbar-expand-lg navbar-toggleable-sm navbar-inverse bg-primary mb-3">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="flex-row d-flex">
                    <a class="navbar-brand" rel="home" href="#">
                    <img style="max-width:60px; margin-top: -6px;"
                     src="../images/logo1.jpg">
                    </a>
                    <button type="button" class="hidden-md-up navbar-toggler" data-toggle="offcanvas" title="Toggle responsive left sidebar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="collapsingNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                        <marquee><a class="nav-link" href="#myAlert" data-toggle="collapse" style="font-family:Arial; font-size:30px;">WELCOME ADMIN <span class="sr-only">WELCOME ADMIN</span></a></marquee>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown ets-right-0">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../images/admin.png" alt="" width="55"  class="img-fluid rounded-circle border user-profile">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php">My Profile</a>
                                <a class="dropdown-item" href="index.php">Send Message</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"data-target="#myModal" data-toggle="modal">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid" id="main">
                <div class="row row-offcanvas row-offcanvas-left">
                    <div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
                        <ul class="nav flex-column pl-1">
                            <li class="nav-item"><a class="nav-link" href="index.php">DASHBOARD</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">DETAIL ▾</a>
                                <ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">
                                    <li class="nav-item"><a class="nav-link" href="instructor.php">ALL DETAIL INSTRUCTOR</a></li>
                                    <li class="nav-item"><a class="nav-link" href="student.php">VIEW DETAIL STUDENT</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="vehicle.php">VEHICLE</a></li>
                            <li class="nav-item"><a class="nav-link" href="timetable.php">TIME TABLE</a></li>
                            <li class="nav-item"><a class="nav-link" href="booking.php">BOOKING</a></li>
                            <li class="nav-item"><a class="nav-link" href="listview.php">LIST VIEW</a></li>
                            <li class="nav-item"><a class="nav-link" href="loginuser.php">USER LOGIN </a></li>
                        </ul>
                    </div>
                    <!--/col-->

                    <div class="col-md-9 col-lg-10 main">
                        <h1 >BOOKING
                            <img src="../images/icons/booking.png" width="100px" height="100px"></h1></h1>
                            <p class="lead hidden-xs-down">Add Booking</p>

                        <div class="alert alert-warning fade collapse" role="alert" id="myAlert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Hello!</strong> You are Admin.
                        </div>
                        <hr>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    $dateComponents = getdate();
                                    if (isset($_GET['month']) && isset($_GET['year'])) {
                                        $month = $_GET['month'];
                                        $year = $_GET['year'];
                                    } else {
                                        $month = $dateComponents['mon'];
                                        $year = $dateComponents['year'];
                                    }
                                    echo build_calendar($month, $year);
                                    ?>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-success"></button><span>AVAILABLE</span><br>
                                    <button class="btn btn-info"></button><span>JPJ TEST</span><br>
                                    <button class="btn btn-danger"></button><span>NOT AVAILABLE</span><br>
                                    <button class="btn btn-warning"></button><span>TODAY</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!--/.container-->
                        <footer class="container-fluid">
                            <p class="text-center small">©2020 Mustika Muhibah Sdn. Bhd.</p>
                        </footer>




                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Logout</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Are you sure want to logout?</div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <a href="../logout.php"><button type="button" class="btn btn-primary-outline">Yes</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    </body>
                    </html>