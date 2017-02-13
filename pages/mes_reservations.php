<h1 style="text-align: center;">Mes reservations</h1>

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

$sql = "SELECT * FROM reservation where user_username='$login_session'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {

     	echo "<div style=' color:#ffffff; position:relative;'><ul style=' margin: 1px 170px; padding:1px 35px; background-color:#ff1c37; max-width:700px;'><li><p>".$row["id_pub"]." | ".$row["num_tel"]." | ".$row["publisher_username"]." | ".$row["date_res"]." - ".$row["time_res"]." | ".$row["dep_arr"]."<a style='text-decoration:none; color:#ffffff; float:right; padding :0px 5px;' href='profile.php?page=8&id_res=".$row["id"]."&id_pub=".$row["id_pub"]."'><i class='fa fa-times'></i> </a></p></li></ul></div>";
     	}
     }
     else {echo "Il n'y a pas des reservations";}
$conn->close();
?> <a href=""></a>