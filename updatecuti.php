<?php
include('connection.php');

$idusr=$_GET["id"];

$dis_usr="SELECT * FROM tbl_cuti_umum WHERE id_cuti_umum='$idusr'";
$resultusr=$conn->query($dis_usr);

$row=$resultusr->fetch_assoc();
?>

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
	<center>
		<h2>Appointment Booking</h2>

		<form method="POST" action="updateprocuti.php">
		
		    <label for="tarikh">Date :</label>
			<input type="date" name="tarikh" value="<?php echo $row["date"];?>"><br><br>
			<label for="sebab">Sebab :</label>
			<input type="text" name="sebab" value="<?php echo $row["sebab"];?>"><br><br>
			<input type="submit" value="Update">
			<input type="hidden" name="id" value="<?php echo $row["id_cuti_umum"]; ?>"/>
		  
		</form>
	</center>
	</body>
</html>
