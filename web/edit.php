<?php 
include 'config.php';
$sid=$_REQUEST['sid'];

$getta=mysqli_query($conn,"select * from class where id='$sid'") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
		$name=$ro['name'];
		
	}
?>
<html>
<head>
<title> Class Edit </title>
<style>
body{
	background-image:url('gp.jpg');
	
}
</style>
</head>
<body>
<div class="front">
<center><h1><font color="#F3F7F6" >Welcome update part</h1><br><br><br>
<p>only change the name->go to update->click it->updated</p></center></div><br><br><br>
<form name="main" method="post" action="addclassv.php">
<input type="hidden" name="id" id="id" value="<?PHP echo $sid;?>">
<input type="hidden" name="edt" id="edt" value="1">

<table border="0" width="50%" align="center">


<tr>
<td align="right" width="15%"><font color='red'>*</font> Name : </td>
<td align="left" width="35%"><input type="text" name="name" id="name" value="<?PHP echo $name;?>"></td>

</tr>
<br>
<tr>
<td align="middle" width="100%" colspan="4"><input type="submit" value=" Update ">&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
</table>
</form>


</body>
</html>