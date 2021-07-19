<?php 
include 'ck.php';
$sid=$_REQUEST['sid'];

$getta=mysqli_query($conn,"select * from exam where sl='$sid'") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
		$exanm=$ro['exanm'];
		$datetime=$ro['datetime'];
		
		
	}
?>
<html>
<head>
<title> Edit Exam Profile </title>
<style>
body{
	background-image:url('clg1.jpg');
	background-repeat:no-repeat;
	background-size:cover;
}
</style>
</head>
<body>
<form name="main" method="post" action="addexamv.php">
<input type="hidden" name="sid" id="sid" value="<?PHP echo $sid;?>">
<input type="hidden" name="edt" id="edt" value="1">
<table border="1" width="50%" align="center">
<center><h1 font color="#11ECAA ">Welcome To the Exam Set Up Block</h1></center>

<tr>

<td align="right" width="10%">Exam Name : </td>
<td align="left" width="40%"><input type="text" value="<?PHP echo $exanm;?>" name="exanm" id="exanm" maxlength="300" size="30" placeholder="Enter Name..."></td>
<td align="right" width="10%"> Date Time : </td>
<td align="left" width="40%"><input type="text" value="<?PHP echo $datetime;?>" name="datetime" id="datetime" maxlength="300" size="30" placeholder="Enter Name..."></td>

</tr>

<tr>
<td align="right" width="100%" colspan="4"><input type="submit" value=" Update ">&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
</table>
</form>


</body>
</html>