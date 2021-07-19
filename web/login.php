<?PHP
include("config.php");
if(isset($_POST["username"]) )
{
$username1 = $_POST['username'];
$password1 = $_POST['password'];


// check it the username exist
$query = mysqli_query($conn,"Select * from main_signup where username='$username1'");
 if ($row = mysqli_fetch_array($query)){
// finally we check the database to see if the password is correct, if not skip to this if's else case

			if ($row["password"] == $password1){
				$last_login=$row["lastlogin"];

				// we determin the date for the lastlogin - field.

				$datetime = date('d/m/Y h:i:s a', time());

				// and we update that field

				$querya = "UPDATE main_signup Set lastlogin = '$datetime' where username='$username1'";

				$result = mysqli_query($conn,$querya)or die (mysqli_error());

				session_start();

				// remove al the data from the session (auto logoff)

				session_unset();

				$_SESSION["pass"] = $password1;

				// put the username in the session

			//	session_register("id");

				$_SESSION["id"] = $username1;

				// session_register("last_login");

				$_SESSION["lastlog"] = $last_login;

				// send the the cookie if needed

				// go to the secured page.

				header("Location: index.php");

}
else
{

    ?>
<script>
	alert("Password Missmatched !");
	window.document.location="login.php";
	</script>	
	<?php

}

}
else
{
?>
	<script>
	alert("Invalid ID!");
	window.document.location="login.php";
	</script>	
<?php
}
}
?>

	<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="login.css">
	</head>
	<body>
  
	<div class="Main-container">
        <div class="container-login">
            <div class="wrap-login">
 
                <div class="login-pic">
                    <img src="i1.jpg" alt="IMG">
                </div>
 
                <form class="login-form" method="post" value="login.php">
                    <span class="login-form-title">Login</span>
 
                    <div class="wrap-input">
                        <input type="text" class="input" name="username" id="username" placeholder="username" required>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input">
                        <input type="password" class="input" name="password" id="password" placeholder="Password" required>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
 
                    <div class="login-form-btn-container">
                        <button class="login-form-btn">Login</button>
                    </div>
 
                  <div class="text-center p-t-1">
                      <span class="txt1">Forgot</span>
                      <a href="#" class="txt2"> Username / Password ?</a>
                  </div>
                  <div class="text-center p-t-2">
                      <a href="#" class="txt2">Create Your Account <i class="fa fa-long-arrow-right " aria-hidden="true"></i></a>
                  </div>
 
                </form>
 
            </div>
        </div>
    </div>
    </body>
    </html>

