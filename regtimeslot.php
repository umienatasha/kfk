<?php
include('connection.php');

$date=$_POST['date'];
$timeslot=$_POST['timeslot'];
$id_patient=$_SESSION['id_patient'];

$sql = "SELECT * FROM bookings WHERE date = '$date' AND timeslot = '$timeslot' ";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$num_rows = mysqli_num_rows($result);
if ($num_rows->query($sql) < 2) {
	?>
	echo '<script type="text/javascript">
                      alert("Tarikh Kekosongan !");
			location="maklumat.php?date=<?php echo $date ;?>&timeslot=<?php echo $timeslot ;?>";
			
                        </script>';
   } else{
		echo '<script type="text/javascript">
                      alert("Tempahan Sudah Penuh !");
			location="timeslot.php";
                        </script>';
	}

$conn->close();	
?>

