<?php
	// Including the php connection page script + calling the connect function.
	require_once ("connection.php");
	check_connection();
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($con,"select username from login where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($con); // Closing Connection
header('Location: index.php?page=2'); // Redirecting To Home Page
}
?>