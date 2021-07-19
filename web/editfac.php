<?php 
include 'ck.php';
$sid=$_REQUEST['sid'];

$getta=mysqli_query($conn,"select * from main_signup where sl='$sid'") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
		$name=$ro['name'];
		$username=$ro['username'];
		$mob=$ro['mob'];
		$mailadres=$ro['mailadres'];
		
	}
?>
<html>
<head>
<title> Edit Student Profile </title>
<style>
body{
	background-image:url('clg1.jpg');
	background-repeat:no-repeat;
	background-size:cover;
}
</style>
</head>
<body>
<form name="main" method="post" action="value1.php">
<input type="hidden" name="sid" id="sid" value="<?PHP echo $sid;?>">
<input type="hidden" name="edt" id="edt" value="1">
<table border="1" width="50%" align="center">

<center><h1><font color="#9611EC">Welcome To Faculty Profile</h1>
</center>
<tr>

<td align="right" width="10%"> Name : </td>
<td align="left" width="40%"><input type="text" value="<?PHP echo $name;?>" name="name" id="name" maxlength="300" size="30" placeholder="Enter Name..."></td>
</tr>
<tr>
<td align="right" width="10%"> Username : </td>
<td align="left" width="40%"><input type="text" value="<?PHP echo $username;?>" name="username" id="username" maxlength="300" size="30" placeholder="Enter Name..."></td>
</tr>
<tr>
<td align="right" width="10%"> Phone : </td>
<td align="left" width="40%"><input type="number" value="<?PHP echo $mob;?>" name="mob" id="mob" maxlength="300" size="30" placeholder="Enter Name..."></td>
</tr>
<tr>
<td align="right" width="10%"> Email : </td>
<td align="left" width="40%"><input type="text" value="<?PHP echo $mailadres;?>" name="mailadres" id="mailadres" maxlength="300" size="30" placeholder="Enter Name..."></td>
</tr>
<tr>
<td align="right" width="10%"> password : </td>
<td align="left" width="40%"><input type="password" value="<?PHP echo $password;?>" name="password" id="password" maxlength="300" size="30" placeholder="Enter Name..."></td>

</tr>

<tr>
<td align="right" width="100%" colspan="4"><input type="submit" value=" Update ">&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
</table>
</form>


</body>
</html>