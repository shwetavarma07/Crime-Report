
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
<h4> Registration</h4>
<form method="post" name="register">
<table>
<tr>
<td>Full Name : </td>
<td><input type="text" name="Full_name" align=right required></td>
</tr>
<tr>
<td>Username : </td>
<td><input type="text" name="username" align=right required></td>
</tr>
<tr>
<td>Aadhar Number : </td>
<td><input type="text" name="adhar" required></td>
</tr>
<tr>
<td>Password : </td>
<td><input type="password" name="pass" required></td>
</tr>
<tr>
<td>Retype your Password : </td>
<td><input type="password" name="repass" required></td>
</tr>
<tr>
<td>
Date Of Birth : <td><input type="Date" name="date" required></td>

<tr>
<td>Gender : </td>
<td><input type="radio" name="r1" value="Male">Male
<input type="radio" name="r1" value="Female">Female</td>
</tr>
<tr>
<td>Address : </td>
<td><textarea rows=8 name="address" required></textarea></td>
</tr>
<tr>
<td>Pincode :</td>
<td> <input type="text" name="pc" required></td>
</tr>
<tr>
<td>City : </td><td><input type="text" name="ct" required></td>
</tr>

<tr>
<td>Mobile Number : </td><td><input type="text" name="mob" required></td>
</tr>
<tr>
<td>E-mail Id : </td><td><input type="text" name="mail" required></td>
</tr>
<tr>
<th colspan=2><input type=submit value="submit" name="submit"></th>
</tr></table>
</form>
<?php if(isset($message)) { echo $message; } ?>
<p>&nbsp</p>

<p>&nbsp</p>

<p>&nbsp</p>






<p>&nbsp;</p>





<p>&nbsp;</p>





</div>





<div id="footer">

<p class="style5 style6">Copyright © 2018 | All Rights Reserved  </p>





</div>





</div>





</body>


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
			$query = "INSERT INTO registration (username,Full_name, Aadhar_no, Password,DOB,Gender,Address,Pincode,City,Email,Mobile) VALUES ('" . $_POST["username"] . "','" . $_POST["Full_name"] . "','" . $_POST["adhar"] . "','" . $_POST["pass"] .  "','" . $_POST["date"] ."','" . $_POST["r1"] . "','" . $_POST["address"] . "','" . $_POST["pc"] . "','" . $_POST["ct"] . "','"  . $_POST["mail"] . "','" . $_POST["mob"] ."')";

//echo $query;
			mysql_query($query);
		
             $current_id = mysql_insert_id();
			

 echo "<script> alert('Registration Successful')</script>";
            

			}

header('Location: login.php');
}

?>
	
</html>

		
         

		
			