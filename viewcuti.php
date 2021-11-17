<?php
include('connection.php');

$sql = "SELECT * FROM tbl_cuti_umum";
$result = mysqli_query($conn, $sql);
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

		<h2>Appointment Booking</h2>

		<table>

		  <tr>
			<th>Id Cuti</th>
			<th>Tarikh</th>
			<th>Sebab</th>
			<th>Action</th>
		  </tr>
		<?php
		if(mysqli_num_rows($result) > 0)
		{
		while($row = mysqli_fetch_assoc($result))
		{
		?>
		  
		<tr>
			<td><?php echo $row["id_cuti_umum"];?></td>
			<td><?php echo $row["tarikh"];?></td>
			<td><?php echo $row["sebab"];?></td>
			
			<td><div>
			<button><a href="updatecuti.php?id=<?php echo $row["id_cuti_umum"]; ?>" onClick="return confirm">Update</a></button>
			<button><a href="deletecuti.php?id=<?php echo $row["id_cuti_umum"]; ?>" onClick="return confirm('Do you really want to delete?');">Delete</a></button>
			</div></td>
		</tr>
		  
		<?php
			   }
			}
			else 
			{
			   echo "0 results";
			}

			mysqli_close($conn);
		?>
		  
		</table>

	</body>
</html>
