<?php
session_start();
include 'connection.php';

if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){

	//mysqli real escape prevent from sql injection which filter the user input
	$username=mysqli_real_escape_string($conn,$_REQUEST['username']);
	$password=mysqli_real_escape_string($conn,$_REQUEST['password']);
	$qr=mysqli_query($conn,"SELECT * FROM loginuser where username='".$username."' and password='".($password)."'");
	if(mysqli_num_rows($qr)>0){
		while($data=mysqli_fetch_assoc($qr))
                {
		if($data['user_type']=='admin'){
                    $_SESSION['idadmin']=$data["id"];
                    echo '<script type="text/javascript">
                      alert("Welcome Admin!");
			location="admin/index.php";
                        </script>';
		}
		elseif ($data['user_type']=='staff'){
                    $_SESSION['idstaff']=$data["id"];
                    echo '<script type="text/javascript">
                      alert("Welcome Instructor!");
			location="staff/index.php";
                        </script>';
		}
                elseif ($data['user_type']=='patient'){
                    $_SESSION['idpatient']=$data["id"];
                    echo '<script type="text/javascript">
                      alert("Welcome Student!");
			location="patient/index.php";
                        </script>';
                }
	}
            }
	else{
		echo '<script type="text/javascript">
                      alert("Invalid username or passsword. Please try again.");
			location="index.php";
                        </script>';
	}
}
