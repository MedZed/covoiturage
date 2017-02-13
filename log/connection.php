
<?php
	$con=mysqli_connect("localhost","root","","profile");
	function check_connection() {
		
		// Check if the connection work
		if (mysqli_connect_errno())
	  	{
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error()."<br><hr>";
	  	} /*else {
				echo 'Connection is good <br><hr>';
	 		}*/
	}

?>