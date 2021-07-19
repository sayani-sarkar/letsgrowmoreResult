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
      <h3 class="mb-2">Crafted for Table <a href="#" target="_blank"></a></h3>
      <p></p>
    </div>
    <div class="my-8 text-center">
      <a href="#" class="text-warning" target="_blank">Browse all components -></a>
    </div>

    <div class="card">
      <div class="card-header">
        <h6></h6><a href="Addexam.php"><img src="add.png" title="Click to add" align="right" height="35px" width="35px"></a>

      </div>
      <div class="table-responsive">
        <table class="table table-hover table-nowrap">
          <thead class="thead-light">
            <tr>
              <th scope="col"> Name Of the Exam</th>
              <th scope="col">Date & Time</th>
              <th scope="col">Edit Exam</th>
			  <th scope="col">Delete Exam</th>
			  
              <th></th>
            </tr>
          </thead>



<?PHP
$f=0;
$getta=mysqli_query($conn,"select * from exam   order by sl,exanm,datetime ") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	$f++;
		$sl=$ro['sl'];
		$exanm=$ro['exanm'];
		
		$datetime=$ro['datetime'];
		
		

?>





<tr>




<td><?php echo $exanm;?></td>
<td><?php echo $datetime;?></td>
<td align="center"><a href="editexam.php?sid=<?php echo $sl?>" title="Click to active"> <img src="edit.ico" width="25px" height="25px"> </a></td>
<td align="center"><a href="delexam.php?sid=<?php echo $sl?>" title="Click to active"> <img src="del.png" width="25px" height="25px"> </a></td>






	


</tr>
<?PHP
    }
?>

</table>

</body>
</html>