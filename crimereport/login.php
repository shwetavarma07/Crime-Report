<?php
if(isset($_SESSION['login_user']))
{
	header("location: home.php");
}

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) 
{
	if (empty($_POST['username']) || empty($_POST['password'])) 
	{
		$error = "Username or Password is invalid";
	}
	else
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		$dbservername = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "crime_report";

		$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

		if ($conn->connect_error) 
		{
    		die("Connection failed: " . $conn->connect_error);
		}
	}

	$sql = "select * from registration where Password='$password' AND username='$username'";
	$result = $conn->query($sql);
	
	if ($result->num_rows == 1) 
	{
		$_SESSION['login_user']=$username; 
		header("location: home.php"); 
	}
	else
	{
		$error = "Username or Password is invalid";
	}
	$conn->close();
}
?>
<html>
<head>
<title>Online Crime Reporting</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="contain">
<div id="header">
<h1 class="style8">ONLINE<br>
CRIME<br>
REPORTING</h1>
</div>

<div id="leftcol">
<h3>Links</h3>
<div id="navcontainer">
<ul id="navlist">
<li><a href="home.php">Home</a></li>
<li><a href="registration.php">Registration</a></li>
<li><a href="complaint.php">Report A Complaint</a></li>
<li><a href="crime_prevention_advice.php">Crime Prevention Advice</a></li>

<li><a href="police.php">Police Login</a></li>
<li><a href="feedback1.php">Feedback</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</div>





</div>
<div id="content">
<h4> Login User</h4>
<form method="post">
<table>
<tr>
<th>UserName :</th>
<td><input id="name" name="username" placeholder="username" type="text"></td>
</tr>
<tr>
<th>Password :</th>
<td><input id="password" name="password" placeholder="**********" type="password"></td>
</tr>
<tr>
<th colspan=2><br>
<input name="submit" type="submit" value=" Login ">
</th>
</tr>
</table>
</form>


<?php if(isset($message)) { echo $message; } ?>
<p>&nbsp</p>

<p>&nbsp</p>

<p>&nbsp</p>






<p>&nbsp;</p>





<p>&nbsp;</p>





</div>





<div id="footer">

<p class="style5 style6">Copyright © 2018 | All Rights Reserved  </p>





</div>





</div>





</body>


</html>