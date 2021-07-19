<?php
include 'ck.php';
$name=$_POST['name'];
$id=$_POST['id'];
$edt=$_POST['edt'];

if($edt=="")
{

if($name=='' or $id=='' )
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
$getta=mysqli_query($conn,"select * from class where name='$name' ") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
	$f++;
    }	

if($f==0)
{	
$query2 = "INSERT INTO class (name,id) VALUES ('$name','$id')";
$result2 = mysqli_query($conn,$query2)or die (mysqli_error($conn));

$msg="Created Successfully. Thank You";

?>
<script language="javascript">
alert('<?php echo $msg;?>');
document.location="class.php";
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
$getta=mysqli_query($conn,"select * from class where name='$name' and id!='$id' ") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
	$f++;
    }	

if($f==0)
{	
$query2 = "update class set name='$name' where id='$id'";
$result2 = mysqli_query($conn,$query2)or die (mysqli_error());
$msg="Updated Successfully. Thank You";
?>
<script language="javascript">
alert('<?=$msg;?>');
document.location="class.php";
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
