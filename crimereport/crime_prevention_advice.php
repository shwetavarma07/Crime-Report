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
$dbname = "mysql";

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
echo " <a href='user_data.php'>View Complaints</a>";
echo " <a href='logout.php'>Log Out</a></td></tr></table>";    
$conn->close();
}
}

}
?>
</i></b></h4>
<br><br>

<table>
<tr>
<th width=50%><h3><u>Anti-social behaviour</u></h3></th>
<th><h3><u>Burglary</u></h3></th>
</tr>
<tr>
<td><p>Anti-social behaviour covers a wide range of unacceptable activity that causes harm to an individual, to their community or to their environment. This could be an action by someone else that leaves you feeling alarmed, harassed or distressed. It also includes fear of crime or concern for public safety, public disorder or public nuisance.</p>
<p>
The police, local authorities and other community safety partner agencies, such as Fire & Rescue and social housing landlords, all have a responsibility to deal with anti-social behaviour and to help people who are suffering from it.
</p>
</td>

<td><p>Homes with no security measures in place are five times more likely to be burgled than those with simple security measures. Good window locks and strong deadlocks can make a big difference.</p>
<p>
Taking just a few steps can make a big difference in keeping your home safe from burglary. Here are a few tips:
</p>
<ul>
<li>Lock your doors and windows every time you leave the house, even when you're just out in the garden, remembering to double-lock UPVC doors (lift handle and turn key)</li>

<li>Hide all keys, including car keys, out of sight and away from the letterbox (remember a device could be used to hook keys through the letterbox)</li>
</td>
</tr>
</table>
</div>





<div id="footer">

<p class="style5 style6">Copyright © 2015 | All Rights Reserved  </p>





</div>





</div>





</body>
</html>
