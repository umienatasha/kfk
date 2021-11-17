<?php
include('connection.php');

$date=$_POST['date'];
$timeslot=$_POST['timeslot'];
$id_patient=$_SESSION['id_patient'];

$sql = "SELECT * FROM bookings WHERE date = '$date' AND timeslot = '$timeslot' ";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$num_rows = mysqli_num_rows($result);
if ($num_rows < 2) 
 ?>
 <script>
				window.location="maklumat.php?date=<?php echo $date ;?>&timeslot=<?php echo $timeslot ;?>";
 </script>

