<?php
// Connecting to the Database
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$database = "oep";

// Create a connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $database);

// Die if connection was not successful
if (!$conn) {
    die('<h1>Server error. Sorry for your incovenience !!</h1>');
    // die("Sorry for your incovenience");
}

?>