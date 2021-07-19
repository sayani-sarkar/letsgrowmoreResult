<?PHP
include("config.php");

// tell we want to work with sessions
session_start();
$last_login=$_SESSION['lastlog'];

// the $HTTP_SESSION_VARS[id] in this query indicates that we want to retrieve the username from the session.
$query = mysqli_query($conn,"Select * from main_signup where username='".$_SESSION['id']."' And password = '".$_SESSION['pass']."'");

// if there are results check it the accesslevel is high enough. If there aren't results tell the user to log-in and stop (die) after that.
if ($row = mysqli_fetch_array($query)){ 
	// set the current level into a variable for use on a page.
	$user_current_level = $row["userlevel"];
	$user_nm = $row["name"];
	// check if the user's access level is higher than zero. since if it is lower than zero he is an admin which have access to al pages.
	// and check if the user's level is high enough for this page.
	

}
else{die(header("location:login.php"));}

// Below we set al variables which can be used in pages, things like the current logged user and his or hers level

// This will set the user_currently_loged variable
// first we remove the htmlcode from the username saved in a cookie
$user_currently_loged = htmlspecialchars($_SESSION["id"],ENT_NOQUOTES);
// Then we replace \" with "
$user_currently_loged = str_replace ('\"', "&quot;", $user_currently_loged);
$user_currently_loged = str_replace ("\'", "&#039", $user_currently_loged);
// and a variable where u get the plain username (only use for scripting!)
$user_currently_loged_plain = $_SESSION["id"];



?>