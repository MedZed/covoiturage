<h1 style="text-align: center;">reserver</h1>
<?php
$id_pub=$_GET['id_pub'] ;
echo "L'id de la publication est :" .$id_pub." ";





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
     	$publisher_username=$row["username"];
     	$places=$row["places"];
     	$num_tel=$row["num_tel"];
     	$time_res=date("h:i:sa");
     	$date_res=date("Y-m-d") ;
     	$dep_arr="(".$row["dep"]." - ".$row["arr"].")";
     	if (($places > 0) && ($publisher_username !==  $login_session)){
     		$places=$places-1;
			$sql_res ="INSERT INTO reservation (id_pub,user_username,publisher_username,date_res,time_res,dep_arr,num_tel) values('$id_pub','$login_session','$publisher_username','$date_res','$time_res','$dep_arr','$num_tel')";
			$sql = " UPDATE pub set places='$places' WHERE id='$id_pub'";


			if ($conn->query($sql_res) === TRUE) {

				if ($conn->query($sql) === TRUE) {

			        echo "Reservation terminer!";
			        header( "refresh:2;url=profile.php?page=6" );
			      
			    } else {
			        echo "Error: " . $sql . "<br>" . $conn->error;
			    }

			} else {
			    echo "Error: " . $sql_res . "<br>" . $conn->error;
			}







     	}
     	else {echo "<p style='color:#ff5445;' >T'a pas le droit de reserver votre pulication</p>";}
     }
}



$conn->close();
?>