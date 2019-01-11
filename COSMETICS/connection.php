<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if ($conn) {
	echo "connection ok";
}
else
{
    die("Connection failed: " . mysqli_connect_error());
}
?>