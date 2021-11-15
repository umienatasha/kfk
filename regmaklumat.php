<?php 
include('connection.php');

$query = "SELECT * FROM bookings WHERE date = '$date' AND timeslot = '$timeslot' ";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$num_rows = mysqli_num_rows($result);
if ($num_rows < 2) {
             $stmt = $mysqli->prepare("INSERT INTO bookings (date, timeslot, name, email, ic, phone, gender, comment, id_patient)  
			  ('?', '?', '?', '?', '?', '?', '?',  '?', '?')";
            $msg = "<div class='alert alert-success'>Tempahah Berjaya!
			
			<script>
				window.location='viewbooking.php';
			</script>
			
			</div>";
        }else {
            echo "<div class='form'>
                  <h3>Sudah Penuh !</h3><br/>
                  <p class='link'>Tekan untuk <a href='timeslot.php'>Tempah</a> tarikh.</p>
                  </div>";
        }


$date=$_POST['date'];
$timeslot=$_POST['timeslot'];
$name=$_POST['name'];
$email=$_POST['email'];
$ic=$_POST['ic'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$comment=$_POST['comment'];
$id_patient=$_SESSION['id_patient'];


$sql = "INSERT INTO bookings (date, timeslot, name, email, ic, phone, gender, comment, id_patient) 
		VALUES ('$date', '$timeslot', '$name', '$email', '$ic', '$phone', '$gender',  '$comment', '$id_patient')";

if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
}
else {
	echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>

<script>

	window.location="viewbooking.php";

</script>