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

$tarikh=$_POST['tarikh'];
$sebab=$_POST['sebab'];
$uidusr=$_POST['id']; //drpd input hidden

$sql = "UPDATE tbl_cuti_umum SET tarikh='$tarikh', sebab='$sebab' where id_cuti_umum='$uidusr'"; 

if ($conn->query($sql) === TRUE) {
	echo "Record has been updated successfully";
}
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<script>
    window.location="viewcuti.php";
</script>