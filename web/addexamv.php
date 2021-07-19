<?php
include 'config.php';
$exanm=$_POST['exanm'];
$datetime=$_POST['datetime'];

$sid=$_POST['sid'];
if($sid=='')
{
if($exanm=='' or $datetime=='' )
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
$getta=mysqli_query($conn,"select * from exam where datetime='$datetime' ") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
	$f++;
    }	

if($f==0)
{	
$query2 = "INSERT INTO exam (exanm,datetime) VALUES ('$exanm','$datetime')";
$result2 = mysqli_query($conn,$query2)or die (mysqli_error($conn));

$msg="Submited Successfully. Thank You";

?>
<script language="javascript">
alert('<?php echo $msg;?>');
document.location="exam.php";
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
	if($exanm=='' or $datetime==''  )
	
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
$getta=mysqli_query($conn,"select * from exam where datetime='$datetime' and sl!='$sid' ") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
	$f++;
    }	

if($f==0)
{	
$query2 = "update exam set exanm='$exanm',datetime='$datetime' where sl='$sid'";
$result2 = mysqli_query($conn,$query2)or die (mysqli_error());
$msg="Updated Successfully. Thank You";
?>
<script language="javascript">
alert('<?=$msg;?>');
document.location="exam.php";
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

