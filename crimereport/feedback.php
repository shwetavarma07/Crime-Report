<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'crime_report');
 define('DB_USER','root');
 define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 function fb()
 { 
$email = $_POST['email'];
 $feedback = $_POST['feedback']; 
 $query = "INSERT INTO feedback (email,feedback) VALUES ('$email','$feedback')";
 $data = mysql_query ($query)or die(mysql_error());
 if($data)
 { 
echo "";
 }
 }
 
 if(isset($_POST['submit'])) 
{
 fb(); 
}
 ?>
<!DOCTYPE html>
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
<li><a href="feedback.php">Feedback</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</div>
</div>
<div id="content">

<?php
if (!isset($_SESSION)) 
{
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "crime_report";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
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
echo " <a href='user_data.php'>View Feedback</a>";
echo " <a href='logout.php'>Log Out</a></td></tr></table>";    
$conn->close();
}
}

}
?>
</i></b></h4>
<br><br>

<form method="POST" action="feedback.php">
     <p> <font color="INDIANRED"> Thanks, for your precious feedback! :) </p> </form>
 <!-- End page content -->
</div>
<div id="footer">
<p class="style5 style6">Copyright © 2018 | All Rights Reserved  </p>
</div>
</body>
</html>