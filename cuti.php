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
	<center>
		<h2>Appointment Booking</h2>

		<form method="POST" action="regcuti.php">
		
		    <label for="tarikh">Date :</label>
			<input type="date" name="tarikh"><br><br>
			<label for="sebab">Sebab :</label>
			<input type="text" name="sebab"><br><br>
			<input type="submit" value="Submit">
		  
		</form>
	</center>
	</body>
</html>
