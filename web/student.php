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
      <h3 class="mb-2">Student Manegement <a href="#" target="_blank"></a></h3>
      <p></p>
    </div>
    <div class="my-8 text-center">
      <a href="https://webpixels.io/components" class="text-warning" target="_blank">Browse all components -></a>
    </div>

    <div class="card">
      <div class="card-header">
        <h6></h6>

      </div>
      <div class="table-responsive">
        <table class="table table-hover table-nowrap">
          <thead class="thead-light">
            <tr>
              <th scope="col">Name</th>
             <th scope="col">username</th>
              <th scope="col">Phone</th>
              <th scope="col">Email</th>
             <th scope="col">Edit profile</th>
			 <th scope="col">Delete profile</th>
              <th></th>
            </tr>
          </thead>



<?PHP
$f=0;
$getta=mysqli_query($conn,"select * from main_signup where userlevel='5' order by sl,username,name,mob,mailadres,act ") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	$f++;
	$sl=$ro['sl'];
		$name=$ro['name'];
		$username=$ro['username'];
		
		
		$mob=$ro['mob'];
		$mailadres=$ro['mailadres'];
		$act=$ro['act'];
		

?>





<tr>



<td><?php echo $name;?></td>
<td><?php echo $username;?></td>

<td><?php  echo $mob;?></td>
<td><?php echo $mailadres;?></td>
<td align="center"><a href="editstud.php?sid=<?php echo $sl?>" title="Click to active"> <img src="edit.ico" width="25px" height="25px"> </a></td>
<td align="center"><a href="del1.php?sid=<?php echo $sl?>" title="Click to active"> <img src="del.png" width="25px" height="25px"> </a></td>



	


</tr>
<?PHP
    }
?>

</table>

</body>
</html>