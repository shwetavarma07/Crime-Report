<?php
include('police_session.php');

error_reporting(0);
$conn = mysql_connect("localhost","root","");
mysql_select_db("crime_report",$conn);

$result = mysql_query("SELECT * FROM feedback");
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
<li><a href="police_data.php">Police Data</a></li>
<li><a href="view feedback.php">View Feedback</a></li>
</ul>
</div>
</div>
<div id="content">
<b>Welcome : <i><?php echo $login_session; ?></i></b>
<b><a href="logout.php">Log Out</a></b>

<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div><br><br>

<table border="2" cellpadding="10" cellspacing="1" width="700" class="tblListForm">
<tr class="listheader">
<th>Feedback Id</th>
<th>E-Mail</th>
<th>Feedback</th>
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
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["feedback"]; ?></td>
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