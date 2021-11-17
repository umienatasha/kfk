<?php
include('connection.php');

$uid=$_GET['id'];

$deleteusr="DELETE FROM tbl_cuti_umum where id_cuti_umum='$uid'";
$resultdelete= $conn->query($deleteusr);

?>
<script>

    window.location="viewcuti.php";

</script>