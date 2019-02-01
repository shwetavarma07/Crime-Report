<?php
include('police_session.php');

error_reporting(0);
$conn = mysql_connect("localhost","root","");
mysql_select_db("crime_report",$conn);
switch($login_session)
{
case 'p001':
{
$pin=400614;
break;
}
case 'p002':
{
$pin=400706;
break;
}
case 'p003':
{
$pin=400086;
break;
}
case 'p004':
{
$pin=421201;
break;
}
case 'p005':
{
$pin=400024;
break;
}
case 'p006':
{
$pin=400083;
break;
}
case 'p007':
{
$pin=400078;
break;
}

default :
{
$pin=000000;
break;
}
}

$result = mysql_query("SELECT * FROM complaint where Pincode='$pin'");
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
<td><?php echo $row["Status"]; ?> <a href="edit_record.php?Comp_id=<?php echo $row["Comp_id"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a></td>
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