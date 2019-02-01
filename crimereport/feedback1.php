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
<li><a href="feedback1.php">Feedback</a></li>
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

echo " <a href='logout.php'>Log Out</a></td></tr></table>";    
$conn->close();
}
}

}
?>
</i></b></h4>
<br><br>


    <p>Please, send us your precious feedback</p>
   
<form method="POST" action="feedback.php">   
   <div class="w3-section">
<b>        <label>E-Mail :</label> </b>
        <input class="w3-input w3-border" type="text" name="email" required>
      </div>
      <div class="w3-section">
  <b>      <label>Feedback :</label> </b>
        <input class="w3-input w3-border" type="text" name="feedback" required>
      </div>
           <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" name="submit"> Submit </a> </button>
<button type="reset" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" name="reset"> Reset </a> </button>
        
</form>  
  </div>
<div id="footer">
<p class="style5 style6">Copyright © 2018 | All Rights Reserved  </p>
</div>
</body>
</html>