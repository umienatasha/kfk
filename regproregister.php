<?php 
include('connection.php');

$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$nophone=$_POST['nophone'];



$sql = "INSERT INTO register (username, password, name, nophone) 
		VALUES ('$username', '$password', '$name', '$nophone')";

if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
}
else {
	echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>

<script>

	window.location="login.php";

</script>