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

$uid=$_GET['id'];


$deleteusr="DELETE FROM bookings where id_book='$uid'";
$resultdelete= $conn->query($deleteusr);

?>
<script>

    window.location="viewbooking.php";

</script>