<?php 
include 'ck.php';
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
<form name="main" method="post" action="putresultv.php">
<input type="hidden" name="sid" id="sid" value="<?PHP echo $sid;?>">
<input type="hidden" name="edt" id="edt" value="1">
<table border="1" width="50%" align="center">

<center><h1 font color="#ECB011 ">Welcome To Result Edit </h1>
</center>
<tr>

<td align="right" width="10%"> Name : </td>


<td align="left" width="40%"><input type="text" value="<?PHP echo $name;?>" name="name" id="name" maxlength="300" size="30" placeholder="Enter Name..."></td>
</tr>
<tr>
<td align="right" width="10%"> Paper 1 : </td>
<td align="left" width="40%"><input type="text" value="<?PHP echo $p1;?>" name="p1" id="p1" maxlength="300" size="30" placeholder="Enter Name..."></td>
</tr>
<tr>
<td align="right" width="10%"> Paper 2 : </td>
<td align="left" width="40%"><input type="text" value="<?PHP echo $p2;?>" name="p2" id="p2" maxlength="300" size="30" placeholder="Enter Name..."></td>
</tr>
<tr>
<td align="right" width="10%"> Paper 3 : </td>
<td align="left" width="40%"><input type="text" value="<?PHP echo $p3;?>" name="p3" id="p3" maxlength="300" size="30" placeholder="Enter Name..."></td>
</tr>
<tr>
<td align="right" width="10%"> Paper 4 : </td>
<td align="left" width="40%"><input type="text" value="<?PHP echo $p4;?>" name="p4" id="p4" maxlength="300" size="30" placeholder="Enter Name..."></td>
</tr>
<tr>
<td align="right" width="10%"> Paper 5: </td>
<td align="left" width="40%"><input type="text" value="<?PHP echo $p5;?>" name="p5" id="p5" maxlength="300" size="30" placeholder="Enter Name..."></td>
</tr>
<tr>
<td align="right" width="10%"> Total: </td>
<td align="left" width="40%"><input type="text" value="<?PHP echo $r;?>" name="r" id="r" maxlength="300" size="30" placeholder="Enter Name..."></td>
</tr>
<tr>
<td align="right" width="10%"> Average : </td>
<td align="left" width="40%"><input type="text" value="<?PHP echo $c;?>" name="c" id="c" maxlength="300" size="30" placeholder="Enter Name..."></td>
</tr>
<tr>
<td align="right" width="10%"> Grade : </td>
<td align="left" width="40%"><input type="text" value="<?PHP echo $g;?>" name="g" id="g" maxlength="300" size="30" placeholder="Enter Name..."></td>

</tr>

<tr>
<td align="right" width="100%" colspan="4"><input type="submit" value=" Update ">&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
</table>
</form>


</body>
</html>