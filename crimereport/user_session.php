<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "crime_report";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

session_start();

$user_chk=$_SESSION['login_user'];
$sql = "select user_id from registration where username='$user_chk'";
$result = $conn->query($sql);

if ($result->num_rows == 1) 
{
    
    $row = $result->fetch_assoc();
    $login_session = $row["user_id"];
    $conn->close();
    
}
else
{
	header('Location: login.php'); 
}
?>