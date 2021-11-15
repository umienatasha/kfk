<?php
session_start();

$conn = mysqli_connect('localhost', 'root' );
if($conn){
	echo "connection successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($conn, 'ohana');

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = " select * from  admin where username='$username' and password='$password' ";
	$query = mysqli_query($conn,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['username'] = $username;
			header('location:admin.php');
		}else{
			echo "login failed";
			header('location:login.php');
		}

}


?>