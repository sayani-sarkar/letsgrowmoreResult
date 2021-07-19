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
<!--header-end-->


<br><br><br><br><br><br>
<div class="p-10 bg-surface-secondary">
  <div class="container">
    <div class="text-center">
      <h3 class="mb-2">Crafted with <a href="https://github.com/webpixels/css" target="_blank">Webpixels CSS</a></h3>
      <p>The design system for Bootstrap 5</p>
    </div>
    <div class="my-8 text-center">
      <a href="https://webpixels.io/components" class="text-warning" target="_blank">Browse all components -></a>
    </div>

    <div class="card">
      <div class="card-header">
        <h6>Bootstrap 5 Table</h6>

      </div>
      <div class="table-responsive">
        <table class="table table-hover table-nowrap">
          <thead class="thead-light">
            <tr>
              <th scope="col">Class Name</th>
              <th scope="col">Subject Name</th>
              
              
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





	


</tr>
<?PHP
    }
?>

</table>

</body>
</html>