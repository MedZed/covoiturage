<?php
$id_res=$_GET['id_res'];
$id_pub=$_GET['id_pub'];
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


$sql = "SELECT * FROM pub where id='$id_pub'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
     
     	$places=$row["places"];
		$places=$places+1;

			$sql_res ="UPDATE pub set places='$places' WHERE id='$id_pub'";


			if ($conn->query($sql_res) === TRUE) {

				if ($conn->query($sql) === TRUE) {

			        echo "Supprission terminer terminer!";
			        header( "refresh:2;url=profile.php?page=6" );
			      
			    } else {
			        echo "Error: " . $sql . "<br>" . $conn->error;
			    }

			} else {
			    echo "Error: " . $sql_res . "<br>" . $conn->error;
			}


$sql = "DELETE FROM reservation where id='$id_res'";
$conn->query($sql);

$conn->close();

echo 'all clear';
header( "refresh:0;url=profile.php?page=6" );
}}

?>









