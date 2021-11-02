<?php 
include('connection.php');

$username = $_POST['username'];
$password = $_POST['password'];
$user_type = $_POST['user_type'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$email = $_POST['email'];

$sql = "INSERT INTO addpatient (username, password, user_type, name, phone, gender, email) 
		VALUES ('$username','$password', '$user_type', '$name', '$phone', '$gender', '$email')";

if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
}
else {
	echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>

<script>

	window.location="viewpatient.php";

</script>