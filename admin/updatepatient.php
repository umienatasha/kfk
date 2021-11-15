<?php
include('connection.php');

$name=$_POST['name'];
$email=$_POST['email'];
$ic=$_POST['ic'];
$username=$_POST['username'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$uidusr=$_POST['id']; //drpd input hidden

$sql = "UPDATE tblpatient SET  name='$name', email='$email', ic='$ic', username='$username', phone='$phone',
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
    //direct user to page displaydata.php
    window.location="viewpatient.php";
</script>