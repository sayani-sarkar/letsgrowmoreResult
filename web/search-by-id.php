<?PHP
include ('ck.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="menu.css">
<link rel="stylesheet" type="text/css" href="class.css">
    <title>Result </title>
  </head>
  <body>
  


<br><br><br><br><br><br>
	<div class="container">
	<div class="row">
	<div class="col-md-12 mt-4">
	<div class="card">
	<div class="card-header">
	<h4 class="card-title">STUDENT RESULT PANEL</h4>
	</div>
	<div class="card-body">
	<div class="row">
	<div class="col-md-6">
	<form action="" method="POST">
	<div class="form-group">
	<input type="text" name="id" class="form-control" placeholder="enter id" required>
	</div>
	<button type="submit" name="search-by-id" class="btn btn-primary">Search</button></form>
	</div>
	</div>
	<?PHP
	
		if(isset($_POST['search-by-id']))
	{
	$id=$_POST['id'];
	
	$f=0;
	$getta=mysqli_query($conn,"SELECT * FROM result WHERE id='$id'") or die(mysqli_error());
	
	
	?>
	
	<div class="table-responsive">
	<div class="table table-bordered">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
	   <th scope="col">Name</th>
      <th scope="col">Paper 1</th>
      <th scope="col">Paper 2</th>
      <th scope="col">Paper 3</th>
	  <th scope="col">Paper 4</th>
	  <th scope="col">Paper 5</th>
	  <th scope="col">Total</th>
	  <th scope="col">percentage</th>
	  <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
  <?PHP
  while($row=mysqli_fetch_array($getta))
	{	$f++;
  ?>
  
    <tr>
      
      <td><?PHP echo $row['id'];?></td>
      <td><?PHP echo $row['name'];?></td>
	  <td><?PHP echo $row['p1'];?></td>
	  <td><?PHP echo $row['p2'];?></td>
	  <td><?PHP echo $row['p3'];?></td>
	  <td><?PHP echo $row['p4'];?></td>
	  <td><?PHP echo $row['p5'];?></td>
	  <td><?PHP echo $row['r'];?></td>
	  <td><?PHP echo $row['c'];?></td>
	  <td><?PHP echo $row['g'];?></td>
      
    </tr>
    <?PHP
	}

	if($f==0)
	{
		?>
		<tr><td colspan="10">No data found</td>
		</tr>
		<?PHP
		
	}}
	?>
  </tbody>
</table>
	</div>

	</div>
	</div>
	</div>
	</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>