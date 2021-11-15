<?php 
include('connection.php');

$date=$_POST['date'];
$timeslot=$_POST['timeslot'];
$name=$_POST['name'];
$email=$_POST['email'];
$ic=$_POST['ic'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$comment=$_POST['comment'];


$sql = "INSERT INTO bookings (date, timeslot, name, email, ic, phone, gender, address, comment) 
		VALUES ('$date', '$timeslot', '$name', '$email', '$ic', '$phone', '$gender', '$address', '$comment')";

if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
}
else {
	echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>

<script>

	window.location="#";

</script>