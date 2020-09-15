<?php
$a=$_POST['name'];
$b=$_POST['password'];
$c=$_POST['Gender'];
$d=$_POST['email'];
$e=$_POST['phone'];
$f=$_POST['address'];
$g=$_POST['pincode'];


if($a==""||$b==""||$c==""||$d==""||$e==""||$f==""||$g=="")
{
    echo "<script type='text/javascript'>alert('Please Fill all fields!')</script>";
    echo "<script>window.location = 'signuppage.php'</script>";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("bookashow");
$query="SELECT * FROM customer WHERE name='$a' AND email='$d' ";
$result=mysql_query($query);
$row=mysql_num_rows($result);
if($row==0)
{
$query1="INSERT INTO customer (name,password,Gender,email,phone,address,pincode) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
mysql_query($query1);





echo "<script type='text/javascript'>alert('Signed UP!')</script>";
echo "<script>window.location = index.php'</script>";
}
else{
    echo "<script type='text/javascript'>alert('User Exists!')</script>";
    echo "<script>window.location = 'signuppage.php'</script>";
}
}
?>
