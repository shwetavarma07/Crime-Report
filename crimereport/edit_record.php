<?php
error_reporting(0);
$conn = mysql_connect("localhost","root","");

mysql_select_db("crime_report",$conn);

if(count($_POST)>0) {
	$qry="UPDATE complaint set Status='" . $_POST["status"] . "', Officer_Incharge='" . $_POST["officer"] . "' WHERE Comp_id='" . $_GET["Comp_id"] . "'";
 	mysql_query($qry);
		$message = "Record Modified Successfully";
echo "$qry";
header("location: police_data.php");
}

$sql_find_data="SELECT * FROM police WHERE Comp_id= ". $_GET["Comp_id"] ." ";
$result = mysql_query($sql_find_data);
$row= mysql_fetch_array($result);
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
<li><a href="police.php">Police Login</a></li>
<li><a href="police_data.php">Police Data</a></li>
</ul>
</div>
</div>
<div id="content">

<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>

<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit Record</td>
</tr>
<tr>
<td><label>Status</label></td>
<td><input type="text" name="status" class="txtField" value="<?php echo $row['Status']; ?>"></td>
</tr>
<td><label>Officer Incharge</label></td>
<td><input type="text" name="officer" class="txtField" value="<?php echo $row['Officer_Incharge']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
<div id="footer">

<p class="style5 style6">Copyright © 2018 | All Rights Reserved  </p>





</div>
</div>
</body>
</html>