
<?php
session_start();
$a=$_POST['x'];
$b=$_POST['y'];
if($a==""||$b=="")
{
    echo "<script type='text/javascript'>alert('Please Fill all fields!')</script>";
    echo "<script>window.location = 'index.php'</script>";
}
elseif($a=="admin"||$b=="admin")
{
    mysql_connect("localhost","root","");
	mysql_select_db("bookashow");





$result1 = mysql_query("SELECT * FROM customer");

echo "<table border='2'>
<tr>
<th>Name</th>
<th>Password</th>
<th>Gender</th>
<th>Email</th>
<th>Phone Number</th>
<th>Address</th>
<th>Pincode</th>
<th>Movie</th>
<th>Seats</th>
<th>Show Time</th>


</tr>";

while($row = mysql_fetch_array($result1))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "<td>" . $row['Gender'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['pincode'] . "</td>";
echo "<td>" . $row['moviebk'] . "</td>";
echo "<td>" . $row['seats'] . "</td>";
echo "<td>" . $row['showtm'] . "</td>";

echo "</tr>";
}
echo "</table>";



}

	else{
	mysql_connect("localhost","root","");
	mysql_select_db("bookashow");

	$query="SELECT * FROM customer WHERE name='$a' AND password='$b' ";
	$result=mysql_query($query);
	$con=mysql_num_rows($result);

	if($con!=0){
		
	$_SESSION['name']=$a;
	header("location:welcome.php");
	}
	else
	{
	echo "<script type='text/javascript'>alert('Please enter correct username/password')</script>";
    echo "<script>window.location = 'index.php'</script>";
	}
}

?>
