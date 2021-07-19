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
</head>
<body>

<header class="header"><!--header-start-->
    <div class="logo">
     Arguveda
    </div>
    <a href="#" class="nav_ico">
      <label for="menu_trigger">
      </label>
      <span></span>
      <span></span>
      <span></span>
    </a>
    
</header><!--header-end-->
<?php

if($user_current_level<0)
{
?>

<input type="radio" id="menu_trigger" name="menu_close">
<nav class="side_nav">
      <span class="close_icon">+
        <input type="radio" name="menu_close">
      </span>
      <ul>
	  
        <li><a target="mainFrame" href="class.php">classes</a></li>
        <li><a target="mainFrame" href="student.php">studentss</a></li>
        <li><a target="mainFrame" href="fac.php">faculty</a></li>
        <li><a target="mainFrame" href="exam.php">Exam Setup</a></li>
        <li><a target="mainFrame" href="resadmin.php">Result</a></li>
		<li><a target="mainFrame" href="logoff.php">LOG OUT</a></li>
    



      </ul>
    </nav>

<?php
}
if($user_current_level==10)
{
?>
<input type="radio" id="menu_trigger" name="menu_close">
<nav class="side_nav">
      <span class="close_icon">+
        <input type="radio" name="menu_close">
      </span>
      <ul>
	  
        <li><a target="mainFrame" href="class.php">HOME</a></li>
        <li><a target="mainFrame" href="student.php">studentss</a></li>
       
        <li><a target="mainFrame" href="exam.php">Exam</a></li>
        <li><a target="mainFrame" href="resadmin.php">Set Result</a></li>
		<li><a target="mainFrame" href="logoff.php">LOG OUT</a></li>
    



      </ul>
    </nav>
	<?php
}
if($user_current_level==5)
{
?>
<input type="radio" id="menu_trigger" name="menu_close">
<nav class="side_nav">
      <span class="close_icon">+
        <input type="radio" name="menu_close">
      </span>
      <ul>
	  
        <li><a  target="mainFrame" href="studclass.php">classes</a></li>
        
        <li><a  target="mainFrame" href="studfac.php">Faculty</a></li>
        <li><a  target="mainFrame" href="upexam.php">Upcomming Exam</a></li>
        <li><a target="mainFrame" href="search-by-id.php">Veiw Recent Result</a></li>
		<li><a target="mainFrame" href="logoff.php">LOG OUT</a></li>
    



      </ul>
    </nav>
<?PHP
}
?>


</body>
</html>
