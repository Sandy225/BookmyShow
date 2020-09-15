<?php
session_start();
if(isset($_SESSION['name']))
{

}
else
{

    echo "<script type='text/javascript'>alert('Please Login First!')</script>";
    echo "<script>window.location = 'index.php'</script>";



}
?>

<!DOCTYPE html>
<html >

<head>

<title >Welcome-BOOKaSHOW.com</title>
</head>

<body background="Photos/img1.jpg">

<div style="background-color:lightblue">

<h1 style="font-size:55px;color:purple;font-family:Comic sans MS; " align="center">Welcome</h1>
<p style="font-size:140%; color:darkblue; font-family:Verdana;"  align="center">Please select a Movie to watch :</p>
<p align="right"><a href="logout.php"  ><font size="3" face="verdana" ">Logout!   </font></a></p><br>
</div>
<br>



<table border="9" bordercolor="red" align="center" bgcolor="white">

<tr>
<th colspan="4" style='font-family:"Courier New";font-size:160%'>Available Movies:</th>
</tr>

<tr>
<th>Photo</th>
<th>Name</th>
<th>Shows</th>
<th width=150>Check for seats</th>


</tr>
<tr>

<td><img src="Photos/endgame.jpg" alt="" border=1 height=200 width=150></img></th>
<td style='font-family:"Verdana";font-size:120%' align="center">Avengers:<br>EndGame</th>
<td style='font-family:"Verdana";font-size:120%' align="center" width=200>Show Time:<br><br>9:00 - 11:30</th>
<td style='font-family:"Verdana";font-size:120%' align="center"width=200>
	<a href="movies/endgame.php">Check Available Seats</a></th>
<!-- considering it is on the same folder that .html file -->

</tr>
<tr>
<td><img src="Photos/johnwick.jpg" alt="" border=1 height=200 width=150></img></th>
<td style='font-family:"Verdana";font-size:120%' align="center">John Wick:<br>Chapter-3</th>
<td style='font-family:"Verdana";font-size:120%' align="center" width=200>Show Time:<br><br>11:00 - 13:30</th>
<td style='font-family:"Verdana";font-size:120%' align="center"width=200>
	<a href="movies/johnwick.php">Check Available Seats</a></th>

</tr>
<tr>
<td><img src="Photos/kabir.jpg" alt="" border=1 height=200 width=150></img></th>
<td style='font-family:"Verdana";font-size:120%' align="center">Kabir Singh</th>
<td style='font-family:"Verdana";font-size:120%' align="center" width=200>Show Time:<br><br>9:30 - 11:30</th>
<td style='font-family:"Verdana";font-size:120%' align="center"width=200>
	<a href="movies/kabir.php">Check Available Seats</a></th>

</tr>
<tr>
<td><img src="Photos/shadaa.jpg" alt="" border=1 height=200 width=150></img></th>
<td style='font-family:"Verdana";font-size:120%' align="center">Shadaa</th>
<td style='font-family:"Verdana";font-size:120%' align="center" width=200>Show Time:<br><br>12:00 - 14:30</th>
<td style='font-family:"Verdana";font-size:120%' align="center"width=200>
	<a href="movies/shadaa.php">Check Available Seats</a></th>
</tr>
<tr>
<td><img src="Photos/godzilla.jpg" alt="" border=1 height=200 width=150></img></th>
<td style='font-family:"Verdana";font-size:120%' align="center">Godzilla</th>
<td style='font-family:"Verdana";font-size:120%' align="center" width=200>Show Time:<br><br>15:00 - 17:00</th>
<td style='font-family:"Verdana";font-size:120%' align="center"width=200>
	<a href="movies/godzilla.php">Check Available Seats</a></th>
</tr>
	<tr>
		<td><img src="Photos/aladdin.jpg" alt="" border=1 height=200 width=150></img></th>
		<td style='font-family:"Verdana";font-size:120%' align="center" width=200>Aladdin</th>
		<td style='font-family:"Verdana";font-size:120%' align="center" width=200>Show Time:<br><br>14:00 - 16:30</th>
		<td style='font-family:"Verdana";font-size:120%' align="center"width=200>
			<a href="movies/aladdin.php">Check Available Seats</a></th>
	</tr>
<tr>
<td><img src="Photos/toy.jpg" alt="" border=1 height=200 width=150></img></th>
<td style='font-family:"Verdana";font-size:120%' align="center">   Toy Story: 4   </th>
<td style='font-family:"Verdana";font-size:120%' align="center" width=200>Show Time:<br><br>18:00 - 20:25</th>
<td style='font-family:"Verdana";font-size:120%' align="center"width=200>
	<a href="movies/toy.php">Check Available Seats</a></th>
</tr>
</table>
</body>
</html>
