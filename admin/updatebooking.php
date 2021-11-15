<?php
include('connection.php');

$name=$_POST['name'];
$email=$_POST['email'];
$ic=$_POST['ic'];
$timeslot=$_POST['timeslot'];
$date=$_POST['date'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$comment=$_POST['comment'];
$uidusr=$_POST['id']; //drpd input hidden

$sql = "UPDATE bookings SET  name='$name', email='$email', ic='$ic', timeslot='$timeslot', date='$date', phone='$phone',
		gender='$gender', comment='$comment' WHERE id_book='$uidusr'"; 

if ($conn->query($sql) === TRUE) {
	echo "Record has been updated successfully";
}
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<script>
    //direct user to page displaydata.php
    window.location="viewbooking.php";
</script>