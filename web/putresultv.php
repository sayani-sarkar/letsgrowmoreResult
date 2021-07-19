<?php
include 'ck.php';
$name=$_POST['name'];

$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$p4=$_POST['p4'];
$p5=$_POST['p5'];
$r=$_POST['r'];
$c=$_POST['c'];
$g=$_POST['g'];
$sid=$_POST['sid'];

if($sid=="")
{
if($name=='' )
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
$getta=mysqli_query($conn,"select * from result where id='$id' ") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
	$f++;
    }	

if($f==0)
{	
$query2 = "INSERT INTO result (id,name,p1,p2,p3,p4,p5,r,c,g) VALUES ('$id','$name','$p1','$p2','$p3','$p4','$p5','$r','$c','$g')";
$result2 = mysqli_query($conn,$query2)or die (mysqli_error($conn));

$msg="Submited Successfully. Thank You";

?>
<script language="javascript">
alert('<?php echo $msg;?>');
document.location="resadmin.php";
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
	if($name=='' )
	
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
$getta=mysqli_query($conn,"select * from result where name='$name' and id!='$sid' ") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
	$f++;
    }	

if($f==0)
{	
$query2 = "update result set name='$name',p1='$p1',p2='$p2',p3='$p3',p4='$p4',p5='$p5',r='$r',c='$c',g='$g' where id='$sid'";
$result2 = mysqli_query($conn,$query2)or die (mysqli_error());
$msg="Updated Successfully. Thank You";
?>
<script language="javascript">
alert('<?=$msg;?>');
document.location="resadmin.php";
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


