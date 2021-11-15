<?php 
include('connection.php');

$date=$_POST['date'];
$timeslot=$_POST['timeslot'];


$sql = "INSERT INTO bookings (date, timeslot) 
		VALUES ('$date', '$timeslot')";

if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
}
else {
	echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>

<script>

	window.location="maklumat.php";

</script>