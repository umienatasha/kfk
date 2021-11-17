<?php
include('connection.php');

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