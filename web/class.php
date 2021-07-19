<?PHP
include("ck.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="menu.css">
<link rel="stylesheet" type="text/css" href="class.css">
</head>
<body>


<br><br><br><br><br><br>
<div class="p-10 bg-surface-secondary">
  <div class="container">
    <div class="text-center">
      <h3 class="mb-2">Welcome To <a href="#" target="_blank">Class Manegment</a></h3>
      <p></p>
    </div>
    <div class="my-8 text-center">
      <a href="#" class="text-warning" target="_blank"></a>
    </div>

    <div class="card">
      <div class="card-header">
        <h6>Class Table</h6>
<a href="addclass.php"><img src="add.png" align="right" height="25px" width="25px">
      </div>
      <div class="table-responsive">
        <table class="table table-hover table-nowrap">
          <thead class="thead-light">
            <tr>
              <th scope="col">Class Name</th>
              <th scope="col">ID</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
              <th></th>
            </tr>
          </thead>



<?PHP
$f=0;
$getta=mysqli_query($conn,"select * from class order by name,id") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	$f++;
		
		$name=$ro['name'];
		
		$id=$ro['id'];
		
		
		

?>





<tr>




<td><?php echo $name;?></td>
<td><?php echo $id;?></td>

<td align="center"><a href="edit.php?sid=<?php echo $id?>" title="Click to active"> <img src="edit.ico" width="25px" height="25px"> </a></td>
<td align="center"><a href="del.php?sid=<?php echo $id?>" title="Click to active"> <img src="del.png" width="25px" height="25px"> </a></td>




	


</tr>
<?PHP
    }
?>

</table>

</body>
</html>