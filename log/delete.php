<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "profile";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM pub where id='$id'";
$conn->query($sql);

$conn->close();

header( "refresh:0;url=profile.php" );


?>









