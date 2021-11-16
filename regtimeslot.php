<?php
include('connection.php');

$date=$_POST['date'];
$timeslot=$_POST['timeslot'];
$id_patient=$_SESSION['id_patient'];

$query = "SELECT * FROM bookings WHERE date = '$date' AND timeslot = '$timeslot' ";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$num_rows = mysqli_num_rows($result);
if ($num_rows < 2) {
	$sql = "SELECT INTO bookings (date, timeslot) VALUES ('$date', '$timeslot')";
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
	
$sql = "SELECT * FROM bookings WHERE date = '$date' AND timeslot = '$timeslot' ";
$result = mysqli_query($conn, $sql);
?>