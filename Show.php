<?php

session_start();
$x=$_SESSION['name'];

mysql_connect("localhost","root","");
mysql_select_db("bookashow");

$query ="SELECT * FROM customer WHERE name='$x'";
$result=mysql_query($query);
$row=mysql_fetch_array($result)

?>


<!DOCTYPE html>
<html >

<head>

<title >User Details</title>
</head>

<body >



<br>
<br><br><br><br><br><br><br>



<table border="5" bordercolor="darkblue" align="center" bgcolor="grey">

<tr>
<th colspan="8" style='font-family:"Courier New";font-size:160%'>User Details:</th>
</tr>

<tr>
<th>Name</th>
<th>Movie Booked</th>
<th>No. of Seats</th>
<th>Show Time</th>
<th>Email Id</th>
<th>Phone Number</th>
<th>Address</th>
<th>Pincode</th>

</tr>
<tr>

<td style='font-family:"Verdana";font-size:120%' align="center" width=100><?php echo $row[0]; ?></th>
<td style='font-family:"Verdana";font-size:120%' align="center" width=100><?php echo $row[8]; ?></th>
<td style='font-family:"Verdana";font-size:120%' align="center" width=100><?php echo $row[7]; ?></th>
<td style='font-family:"Verdana";font-size:120%' align="center" width=150><?php echo $row[9]; ?></th>
<td style='font-family:"Verdana";font-size:120%' align="center" width=200><?php echo $row[3]; ?></th>
<td style='font-family:"Verdana";font-size:120%' align="center" width=150><?php echo $row[4]; ?></th>
<td style='font-family:"Verdana";font-size:120%' align="center" width=200><?php echo $row[5]; ?></th>
<td style='font-family:"Verdana";font-size:120%' align="center" width=200><?php echo $row[6]; ?></th>



</tr>

</table>
<form align="center">
<br><br><br><br><br><input type="button" onclick="window.location.href = 'http://localhost/BookmyShow/logout.php';" value="Logout" />
</form>
</body>
</html>
