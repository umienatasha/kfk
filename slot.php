<?php
include('connection.php');
 if(!isset($_SESSION["id_patient"])) {
        //  header("Location: login.php");
		print_r($_SESSION);
        exit();
    }
	
$id_patient=$_SESSION['id_patient'];
$sql = "SELECT  * FROM tblpatient WHERE id_patient='$id_patient' ";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result); // cara declare row
$username=$row['username'];

?>

<!DOCTYPE html>
<html>
	<title>Pilih Slot</title>
	<head>
		<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
	</head>
	<body>
		
		<center><h1 class="my-5">Hey, <?php echo $username; ?>!</b>.</h1></center>
		
		<h2>Appointment Booking</h2>
	<form method="post" action="">

		<table>
		  <tr>
			<th>Hari</th>
			<th>Tarikh</th>
			<th>09:00 am</th>
			<th>10:00 am</th>
			<th>11:00 am</th>
			<th>12:00 pm</th>
			<th>02:00 pm</th>
			<th>03:00 pm</th>
			<th>04:00 pm</th>
			<th>05:00 pm</th>
		  </tr>
		  
		  <tr id="book">
			<td>Isnin</td>
			<td name="date">22.11.21</td>
			<td name="timeslot"><a href="regtimeslot.php">Tempah</a></td>
			<td>Tempah</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		  </tr>
		  
		  <tr>
			<td>Selasa</td>
			<td>23.11.21</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		  </tr>
		  
		  <tr>
			<td>Rabu</td>
			<td>24.11.21</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		  </tr>
		  
		  <tr>
			<td>Khamis</td>
			<td>25.11.21</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		  </tr>
		  
		  <tr>
			<td>Jumaat</td>
			<td>26.11.21</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		  </tr>
		  
		  <tr>
			<td>Sabtu</td>
			<td>27.11.21</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td style="background-color:#ff0000;"></td>
			<td style="background-color:#ff0000;"></td>
			<td style="background-color:#ff0000;"></td>
			<td style="background-color:#ff0000;"></td>
		  </tr>
		  
		  <tr>
			<td>Ahad</td>
			<td>28.11.21</td>
			<td style="background-color:#ff0000;"></td>
			<td style="background-color:#ff0000;"></td>
			<td style="background-color:#ff0000;"></td>
			<td style="background-color:#ff0000;"></td>
			<td style="background-color:#ff0000;"></td>
			<td style="background-color:#ff0000;"></td>
			<td style="background-color:#ff0000;"></td>
			<td style="background-color:#ff0000;"></td>
		  </tr>
		</table>
		
	</form>

	</body>
</html>
