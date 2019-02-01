<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit']))
{
	if (empty($_POST['id']) || empty($_POST['pass'])) 
	{
		$error = "Username or Password is invalid";
	}
	else
	{
		$user=$_POST['id'];
		$pass=$_POST['pass'];

		$dbservername = "localhost";
		$dbusername = "root";
		$dbpassword = "root";
		$dbname = "crime_report";

		$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

		if ($conn->connect_error) 
		{
    		die("Connection failed: " . $conn->connect_error);
		}
	}

	$sql = "select * from police where password='$pass' AND police_id='$user'";
	$result = $conn->query($sql);
echo $sql;
	if ($result->num_rows == 1) 
	{
		$_SESSION['login_user']=$user; 
		header("location: police_data.php"); 
	}
	else
	{
		$error = "Username or Password is invalid";
	}
	$conn->close();
}

?>