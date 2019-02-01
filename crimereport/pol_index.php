<?php
include('police_login.php');
if(isset($_SESSION['login_user']))
{
	header("location: police_data.php");
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
<li><a href="police.php">Police Login</a></li>
<li><a href="police_data.php">Police Data</a></li>
</ul>
</div>

</div>




<div id="content">
<h4>Police Login Form</h4>
<form method="post">
<table>
<tr>
<th>
UserName :</th>
<td><input id="name" name="user" placeholder="username" type="text"></td>
</tr>
<tr>
<th>Password :</th>
<td><input id="password" name="pass" placeholder="**********" type="password"></td>
</tr>
<th colspan=2><br>
<input name="submit" type="submit" value=" Login ">
</th>
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