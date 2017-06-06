<?php
echo "Hello World";
 ?>
<?php

$server = "localhost";
$username = "root";
$password="";
$db_name ="swagless";
//Establish connection
$conn = mysqli_connect($server, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
