<?php
session_start();
if(isset($_SESSION['user']))
{
//echo "Hi ". $_SESSION['name'].", you are logged in. <a href=\"logout.php\">logout</a>";
header("Location:userhome.php");
}
else{
echo "You have been logged out. Please <a href=\"index.php\">login</a> again";
}
?>