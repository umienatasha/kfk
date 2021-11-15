<?php
include('connection.php');

$uid=$_GET['id'];


$deleteusr="DELETE FROM bookings where id_book='$uid'";
$resultdelete= $conn->query($deleteusr);

?>
<script>

    window.location="viewbooking.php";

</script>