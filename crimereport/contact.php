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

<h1>Contacts</h1>
</div>
<table border=2 align=center>
<tr>
<th>Police Station</th>
<th	>Phone Number</th>
</tr>
<tr>
<td>CBD Belapur</td>
<td>022 2758 0255</td>
</tr>
<tr>
<td>Nerul</td>
<td>022 2770 2324</td>
</tr>
<tr>
<td>Vikhroli</td>
<td>022 2742 3000</td>
</tr>
<tr>
<td>Ghatkopar</td>
<td>022 2782 0346</td>
</tr>
<tr>
<td>Bhandup</td>
<td>022 2755 0777</td>
</tr>
<tr>
<td>Dombivali</td>
<td>022 2755 0888</td>
</tr>
<tr>
<td>Kurla</td>
<td>022 2755 1213</td>
</tr>

</table>



<div id="footer">

<p class="style5 style6">Copyright © 2018 | All Rights Reserved  </p>





</div>





</div>





</body>
</html>
