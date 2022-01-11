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


$deleteusr="DELETE FROM tblpatient where id_patient='$uid'";
$resultdelete= $conn->query($deleteusr);

?>
<script>

    window.location="viewpatient.php";

</script>