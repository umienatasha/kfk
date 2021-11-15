<?php
include('connection.php');

$uid=$_GET['id'];


$deleteusr="DELETE FROM tblpatient where id_patient='$uid'";
$resultdelete= $conn->query($deleteusr);

?>
<script>

    window.location="viewpatient.php";

</script>