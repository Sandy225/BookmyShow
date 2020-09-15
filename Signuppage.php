<!DOCTYPE HTML>
<html>

<head>
<title>Register Form</title>
</head>
<body ><center>
<h1 style="font-size:40px;color:purple;font-family:verdana;">SIGN UP</h1>
<form method="POST" action="signup.php">
<br><br>




<br><br><br><br>
<table>
<tr>
<td><font size="3" face="verdana" >Name :</font></td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td><br><font size="3" face="verdana" >Password :</font></td>
<td><br><input type="password" name="password"></td>
</tr>
<tr>
<td><br><font size="3" face="verdana" >Gender :</font></td>
<td><br>
<input type="radio" name="Gender" value="Male"> Male
<input type="radio" name="Gender" value="Female"> Female
</td>
</tr>
<tr>
<td><br><font size="3" face="verdana" >Email :</font></td>
<td><br><input type="email" name="email"></td>
</tr>
<tr>
<td><br><font size="3" face="verdana" >Phone no :</font></td>
<td><br>

<input type="phone" name="phone">
</td>
</tr>
<tr>
<td><br><font size="3" face="verdana" >Address :</font></td>
<td><br>

<input type="text" size="50" name="address">
</td>
</tr>
<tr>
<td><br><font size="3" face="verdana" >Pincode No.:</font></td>
<td><br>

<input type="number" name="pincode">






</td>
</tr>
</table>
<br><input type="submit" value="Create Account"><br><br>
<a href="index.php">Login Instead!</a><br>
</form>
</body>
</html>
