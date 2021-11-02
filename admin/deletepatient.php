<?php
include('connection.php');

$uid=$_GET['id'];

$deleteusr="DELETE FROM users where id='$uid'";
$resultdelete= $conn->query($deleteusr);

?>

<script>

    window.location="viewpatient.php";

</script>