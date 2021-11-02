<?php

$con = mysqli_connect('localhost', 'root', '');

if (!$con) {
    echo 'not connected to server';
}
if (!mysqli_select_db($con, 'ohana')) {
    echo 'database not selected';
}

$name = $_POST['name'];
$email = $_POST['email'];
$nophone = $_POST['nophone'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$user_type = $_POST['user_type'];


$sql = "INSERT INTO loginuser (name, email, nophone, gender, username, password, user_type) VALUES ('$name', '$email', '$nophone', '$gender', '$username', '$password', '$user_type' )";

if (!mysqli_query($con, $sql)) {
    echo '<script type = "text/javascript" >
        alert("Sorry, We cant create a new time table at this moment !");
location = "index.php";
</script>';
} else {
    echo '<script type = "text/javascript" >
        alert("New loginuser information has been Added !");
location = "index.php";
</script>';
}
?>