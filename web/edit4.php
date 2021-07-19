<?php 
include 'config.php';
$sid=$_REQUEST['sid'];

$getta=mysqli_query($conn,"select * from result where id='$sid'") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
		$name=$ro['name'];
		$p1=$ro['p1'];
		$p2=$ro['p2'];
		$p3=$ro['p3'];
		$p4=$ro['p4'];
		$p5=$ro['p5'];
		$r=$ro['r'];
		$c=$ro['c'];
		$g=$ro['g'];
		
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
<form name="main" method="post" action="putresultv.php">
<input type="hidden" name="id" id="id" value="<?PHP echo $sid;?>">
<input type="hidden" name="edt" id="edt" value="1">

<table border="0" width="50%" align="center">


<tr>
<td align="right" width="15%"><font color='red'>*</font> Name : </td>
<td align="left" width="35%"><input type="text" name="name" id="name" value="<?PHP echo $name;?>"></td>
<td align="right" width="15%"><font color='red'>*</font> Paper 1 : </td>
<td align="left" width="35%"><input type="text" name="p1" id="p1" value="<?PHP echo $p1;?>"></td>
</tr>
<tr>
<td align="right" width="15%"><font color='red'>*</font> Paper 2 : </td>
<td align="left" width="35%"><input type="text" name="p2" id="p2" value="<?PHP echo $p2;?>"></td>
<td align="right" width="15%"><font color='red'>*</font> Paper 3 : </td>
<td align="left" width="35%"><input type="text" name="p3" id="p3" value="<?PHP echo $p3;?>"></td>
</tr>
<tr>
<td align="right" width="15%"><font color='red'>*</font> Paper 4 : </td>
<td align="left" width="35%"><input type="text" name="p4" id="p4" value="<?PHP echo $p4;?>"></td>
<td align="right" width="15%"><font color='red'>*</font> Paper 5 : </td>
<td align="left" width="35%"><input type="text" name="p5" id="p5" value="<?PHP echo $p5;?>"></td>
</tr>
<tr>
<td align="right" width="15%"><font color='red'>*</font> Marks : </td>
<td align="left" width="35%"><input type="text" name="r" id="r" value="<?PHP echo $r;?>"></td>
<td align="right" width="15%"><font color='red'>*</font> avarge : </td>
<td align="left" width="35%"><input type="text" name="c" id="c" value="<?PHP echo $c;?>"></td>
</tr>
<tr>
<td align="right" width="15%"><font color='red'>*</font> Grade : </td>
<td align="left" width="35%"><input type="text" name="g" id="g" value="<?PHP echo $g;?>"></td>

</tr>
<br>
<tr>
<td align="middle" width="100%" colspan="4"><input type="submit" value=" Update ">&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
</table>
</form>


</body>
</html>