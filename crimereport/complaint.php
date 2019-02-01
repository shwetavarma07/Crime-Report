
<?php
error_reporting(0);


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

$conn = mysql_connect("localhost","root","");
mysql_select_db("crime_report",$conn);

$result = mysql_query("SELECT * FROM complaint where user_id='$login_session'");
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
<li><a href="contact.php">Contact Us</a></li>
</ul>
</div>





</div>
<div id="content">

<?php
if (!isset($_SESSION)) 
{
session_start();

if ($_SESSION == FALSE)
{
echo "<table align=right><tr><td><font size=2>Welcome ";
echo "Guest"; 
echo " <a href='login.php'>Login</a></td></tr></table>";

}
else
{
$user_check=$_SESSION['login_user'];
$sql = "select username from registration where username='$user_check'";
$result = $conn->query($sql);


if ($result->num_rows == 1) 
{
    
    $row = $result->fetch_assoc();
    $login_session = $row["username"];

   echo "<table align=right><tr><td><font size=2>Welcome ";
echo $login_session; 
echo " <a href='user_data.php'>View Complaints</a>";
echo " <a href='logout.php'>Log Out</a></td></tr></table>";    
$conn->close();
}
}

}
?>
</i></b></h4>

<div id="content">
<h4> Register a Complaint</h4>
<br><br><form method="post">
<table align=left width=80%>
<tr>
<td width=100>Crime Type: </td>
<td><input type="text" name="crime_type" align=right></td>
</tr>
<tr>
<td>Location : </td>
<td><textarea cols=30 rows=5 align=right name="location"></textarea></td>
</tr>
<tr>
<td>Pincode: </td>
<td><input type="text" name="pin"></td>
</tr>
<tr>
<th colspan=2><input type=submit value="register complaint" name="submit"></th>
</tr>
</table>
</form>




</div>





<div id="footer">

<p class="style5 style6">Copyright © 2018 | All Rights Reserved  </p>





</div>





</div>





</body>
</html>
<?php

if(isset($_REQUEST['submit'])){
	
//mysql_connect(host name, user name, password)
//mysql_connect() will get the correct value if it is succeed but false if it is fails
	$conn = mysql_connect("localhost","root","");

			if (!$conn) {
			    die('Could not connect: ' . mysql_error());
			}else{
              
            /* echo 'Connected successfully';
			mysql_close($conn);

			echo "<pre>";
			print_r($_REQUEST);
			exit();*/

			$dbResult=mysql_select_db("crime_report",$conn);
			/*if($dbResult)
			{
				echo "found";
			}
			else{
				echo "Not found";
			}
			exit();*/
			$query = "INSERT INTO complaint (Crime_type,Location, Pincode,User_id) VALUES ('" . $_POST["crime_type"] . "','" . $_POST["location"] . "','" . $_POST["pin"] . "', '" . $login_session . "')";

//echo $query;
			mysql_query($query);
		
             $current_id = mysql_insert_id();
			

 echo "<script> alert('Registration Successful')</script>";
            

			}
header('location: user_data.php');
}

?>