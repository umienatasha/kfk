<?php 
include('connection.php');

$tarikh=$_POST['tarikh'];
$sebab=$_POST['sebab'];


$sql = "INSERT INTO tbl_cuti_umum (tarikh, sebab) VALUES ( '$tarikh', '$sebab')";

if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
}
else {
	echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>

<script>

	window.location="viewcuti.php";

</script>