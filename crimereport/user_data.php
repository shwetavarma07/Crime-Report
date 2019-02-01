<?php
include('user_session.php');

error_reporting(0);
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
echo " <a href='user_data.php'>View Complaints</a>";
echo " <a href='logout.php'>Log Out</a></td></tr></table>";    
$conn->close();
}
}

}
?>
</i></b></h4>
<br><br>

<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div><br><br>

<table border="2" cellpadding="10" cellspacing="1" width="600" class="tblListForm">
<tr class="listheader">
<th>Complaint Id</th>
<th>Crime Type</th>
<th>Location</th>
<th>Pincode</th>
<th>Status</th>
<th>Office Incharge</th>
<th>User_id</th>
</tr>
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
/*if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";*/
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["Comp_id"]; ?></td>
<td><?php echo $row["Crime_type"]; ?></td>
<td><?php echo $row["Location"]; ?></td>
<td><?php echo $row["Pincode"]; ?></td>
<td><?php echo $row["Status"]; ?></td>
<td><?php echo $row["Officer_Incharge"]; ?></td>
<td><?php echo $row["User_id"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</form>






</div>





<div id="footer">

<p class="style5 style6">Copyright © 2018 | All Rights Reserved  </p>





</div>





</div>





</body>
</html>
