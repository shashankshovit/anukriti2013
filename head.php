<?php session_start(); include("database.php"); ?>

<?php 
	$username=$_SESSION['username'];
	if($username=="")
	{
		include("login.html");
	}
	else
	{
		echo("Welcome ".$username);
		echo("<input type=\"button\" class =\"box4\" value=\"Logout\" onclick=\"parent.location='logout.php'\" >");
		
	}

?>


