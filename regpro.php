<?php 
include('connection.php');

//$_POST hide
$password=$_POST['password'];

$sql = "INSERT INTO tblpatient (password) VALUES ('$password')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
}
else {
	echo "Error: " .$sql . "<br>" . $conn->error;
}

 $query    = "SELECT * FROM `tblpatient` WHERE ic='$ic'
                     AND password='$password'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $num_rows = mysqli_num_rows($result);
		$rows = mysqli_fetch_assoc($result); // cara declare row
		$id_patient = $rows['id_patient'];               //declare $id_patient

        if ($num_rows == 1) {
            $_SESSION['id_patient'] = $id_patient;
			$id_patient=$_SESSION['id_patient'];

            // Redirect to user dashboard page
            header("Location: slot.php");
        } else {
            echo "<div class='form'>
                  <h3>Kad Pengenalan Atau Kata Laluan Tidak Betul !</h3><br/>
                  <p class='link'>Tekan <a href='login.php'>Login</a> Untuk LogMasuk</p>
                  </div>";
        }

$conn->close();
?>

<script>

	window.location="login.php";

</script>