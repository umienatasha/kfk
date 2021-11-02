<?php

$con = mysqli_connect('localhost', 'root', '');

if (!$con) {
    echo 'not connected to server';
}
if (!mysqli_select_db($con, 'register')) {
    echo 'database not selected';
}

$rawatan_name = $_POST['rawatan_name'];

$sql = "INSERT INTO rawatan (rawatan_name) VALUES ('$rawatan_name')";

if (!mysqli_query($con, $sql)) {
    echo '<script type = "text/javascript" >
        alert("Sorry, We cant create a new time table at this moment !");
location = "viewrawatan.php";
</script>';
} else {
    echo '<script type = "text/javascript" >
        alert("New treatment information has been Added !");
location = "viewrawatan.php";
</script>';
}
?>