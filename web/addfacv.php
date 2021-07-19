<?php
include 'config.php';
$name=$_POST['name'];
$username=$_POST['username'];
$mob=$_POST['mob'];
$mailadres=$_POST['mailadres'];
$sid=$_POST['sid'];
if($sid=="")
{
if($mob=='' or $username=='' )
	{
	?>
<script language="javascript">
alert('Please Fill .......');
window.history.go(-1);
</script>
<?php	
	}
else
{
$f=0;
$getta=mysqli_query($conn,"select * from main_signup where mob='$mob' ") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
	$f++;
    }	

if($f==0)
{	
$query2 = "INSERT INTO main_signup (name,username,password,mob,mailadres,userlevel,act) VALUES ('$name','$username','faculty','$mob','$mailadres','10','1')";
$result2 = mysqli_query($conn,$query2)or die (mysqli_error($conn));

$msg="Created Successfully. Thank You";

?>
<script language="javascript">
alert('<?php echo $msg;?>');
document.location="fac.php";
</script>
<?php
}
else
{
?>
<script language="javascript">
alert('Duplicate Data!!');
window.history.go(-1);
</script>
<?php	
}}}
else
{
	if($name=='' or $username=='' or $mob=='' )
	
	{
	?>
<script language="javascript">
alert('Please Fill .......');
window.history.go(-1);
</script>
<?php	
	}
else
{
$f=0;
$getta=mysqli_query($conn,"select * from main_signup where mob='$mob' and sl!='$sid' ") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
	$f++;
    }	

if($f==0)
{	
$query2 = "update main_signup set name='$name',username='$username',mob='$mob',mailadres='$mailadres',password='$password' where sl='$sid'";
$result2 = mysqli_query($conn,$query2)or die (mysqli_error());
$msg="Updated Successfully. Thank You";
?>
<script language="javascript">
alert('<?=$msg;?>');
document.location="fac.php";
</script>
<?php
}
else
{
?>
<script language="javascript">
alert('Duplicate Data!!');
window.history.go(-1);
</script>
<?php	
}}
}
?>

