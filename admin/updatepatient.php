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

$name=$_POST['name'];
$email=$_POST['email'];
$ic=$_POST['ic'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$uidusr=$_POST['id']; //drpd input hidden

$sql = "UPDATE tblpatient SET  name='$name', email='$email', ic='$ic', password='$password', phone='$phone',
		gender='$gender', address='$address' WHERE id_patient='$uidusr'"; 

if ($conn->query($sql) === TRUE) {
	echo "Record has been updated successfully";
}
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<script>
    window.location="viewpatient.php";
</script>