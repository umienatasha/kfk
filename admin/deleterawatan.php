<?php
include('connection.php');

$uid=$_GET['id'];

$deleteusr="DELETE FROM rawatan where id='$uid'";
$resultdelete= $conn->query($deleteusr);

?>

<script>

    window.location="viewrawatan.php";

</script>