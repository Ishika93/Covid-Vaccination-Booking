<?php
/* Local Database*/

$servername = "localhost:8080";
$username = "root";
$password = "";
$dbname = "covid19";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?> 