<?PHP
include ("ck.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="menu.css">
<link rel="stylesheet" type="text/css" href="class.css">
<link rel="stylesheet" type="text/css" href="upcomeexam.css">
</head>
<body>



<br><br><br><br><br><br>
<body>
 <div id="wrapper">
  <h1>Sortable Table of Search Queries</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Name Of exam</span></th>
        <th><span>Date & Time</span></th>
        
        <th><span>Join</span></th>
      </tr>
    </thead>
    <?PHP
$f=0;
$getta=mysqli_query($conn,"select * from exam  order by exanm,datetime  ") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	$f++;
		
		$exanm=$ro['exanm'];
		
		
		$datetime=$ro['datetime'];
		
		

?>





<tr>




<td><?php echo $exanm;?></td>

<td><?php echo $datetime;?></td>
<td align="center"><a href="deactive.php?sid=<?php echo $sl?>" title="Click to join the exam"> <img src="join.svg" width="25px" height="25px"> </a></td>




	


</tr>
<?PHP
    }
?>


  </table>
 </div> 
</body>