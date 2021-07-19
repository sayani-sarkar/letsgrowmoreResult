<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="form.css">
    <title>Dashboard</title>
	<script>
 function calc()
 {
 if(document.getElementById('p1').value=='')
 {
	 alert('Please Input a valid Number! ');
	 document.getElementById('p1').focus();
 }
 if(document.getElementById('p2').value=='')
 {
	 alert('Please Input a valid Number! ');
	 document.getElementById('p2').focus();
 }
 if(document.getElementById('p3').value=='')
 {
	 alert('Please Input a valid Number! ');
	 document.getElementById('p3').focus();
 }
 if(document.getElementById('p4').value=='')
 {
	 alert('Please Input a valid Number! ');
	 document.getElementById('p4').focus();
 }
 if(document.getElementById('p5').value=='')
 {
	 alert('Please Input a valid Number! ');
	 document.getElementById('p5').focus();
 }
 else
 {
  var a=Number(document.getElementById('p1').value);
  var b=Number(document.getElementById('p2').value);
  var c=Number(document.getElementById('p3').value);
  var d=Number(document.getElementById('p4').value);
  var e=Number(document.getElementById('p5').value);
  var z= a+b+c+d+e;
  var p=(z/500)*100;
 document.getElementById('r').value=z;
 document.getElementById('c').value=p;
 }
 
 
 }

</script><script>
 function calc1(){
 var a=Number(document.getElementById('p1').value);
  var b=Number(document.getElementById('p2').value);
  var c=Number(document.getElementById('p3').value);
  var d=Number(document.getElementById('p4').value);
  var e=Number(document.getElementById('p5').value);
if((a+b+c+d+e)>475){
 document.getElementById('g').value='A+';}
 else{
	 if((a+b+c+d+e)<=474 && (a+b+c+d+e)>=410)
	 {
		 document.getElementById('g').value='A';
	 }
	 else{
		if((a+b+c+d+e)<=409 && (a+b+c+d+e)>=397)
	 {
		 document.getElementById('g').value='B+';
	 } 
    else{
		if((a+b+c+d+e)<=396 && (a+b+c+d+e)>=345)
	 {
		 document.getElementById('g').value='B';
	 } 
	 else{
		 if((a+b+c+d+e)<=344 && (a+b+c+d+e)>=297)
	 {
		 document.getElementById('g').value='C+';
	 } 
	 else{
		  if((a+b+c+d+e)<=296 && (a+b+c+d+e)>=245)
	 {
		 document.getElementById('g').value='C';
	 } 
	 else{
		  if((a+b+c+d+e)<=244 && (a+b+c+d+e)>=194)
	 {
		 document.getElementById('g').value='D';
	 }
else{	 
 document.getElementById('g').value='Fail';
 }}}}}}}
 } </script>
</head>
<body>
        
    <div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        
        <a href="logout.php" style="color: white"><span class="fa fa-sign-out fa-2x">Logout</span></a>
    </div>


    <div class="main">
        <form name="main" method="post" action="putresultv.php">
            <fieldset>
            <legend>Enter Marks</legend>

               

                <input type="text" name="name" id="name" placeholder="Name">

                <input type="text" name="p1" id="p1" placeholder="Paper 1">
                <input type="text" name="p2" id="p2" placeholder="Paper 2">
                <input type="text" name="p3" id="p3" placeholder="Paper 3">
                <input type="text" name="p4" id="p4" placeholder="Paper 4">
                <input type="text" name="p5" id="p5" placeholder="Paper 5">
				<input type="button" value="Claculate" onclick="calc()">
				Total Score: <input type="text" name="r" id="r"> 
				Total Score: <input type="text" name="c" id="c">
<input type="button" value="Grade" onclick="calc1()">				
				GRADE: <input type="text" name="g" id="g"> 
				<?php  
    $marks=69;      
    if ($marks<33){    
        echo "fail";    
    }    
    else if ($marks>=34 && $marks<50) {    
        echo "D grade";    
    }    
    else if ($marks>=50 && $marks<65) {    
       echo "C grade";   
    }    
    else if ($marks>=65 && $marks<80) {    
        echo "B grade";   
    }    
    else if ($marks>=80 && $marks<90) {    
        echo "A grade";    
    }  
    else if ($marks>=90 && $marks<100) {    
        echo "A+ grade";   
    }  
   else {    
        echo "Invalid input";    
    }    
?>  
				
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </div>

</body>
</html>

