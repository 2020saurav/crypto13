<?php
session_start();
if (isset($_SESSION['user'])){
header("Location:userhome.php");}
else
{
echo "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Crypto || Takneek</title>

<script type=\"text/javascript\" src=\"validate.js\"></script>";


include_once("includes/header.php");
echo"
<div id=\"login\" style=\"width:50%;float:left;margin-left:25%\">
 <h1> Register </h1>
<form name='regform' action='register.php' method='POST' onsubmit=\"return validator()\">";
echo "<table><tr><td>Name </td><td><input class=\"textbox\" type='text' name='name' /> </td></tr>";
echo "<tr><td>Pool</td><td><input type='radio' name='pool' value='A' /> Marathas 
<input type='radio' name='pool' value='B' /> Mauryans 
<input type='radio' name='pool' value='C' /> Mughals 
<input type='radio' name='pool' value='D' /> Rajputs </td>
</tr>";
echo "<tr><td>Username </td><td><input class=\"textbox\" type='text' name='username'/></td></tr>";
echo "<tr><td>Password </td><td><input class=\"textbox\" type='password' name='passwd1'/></td></tr>";
echo "<tr><td>Confirm Password </td><td><input class=\"textbox\" type='password' name='passwd2'/></td></tr>";
echo "<tr><td>Email-Id </td><td><input class=\"textbox\" type='text' name='emailid'/> </td></tr></table>";
echo "<br /><input class=\"btn\" type='submit' value='Submit' /> <br /> </form>";

echo "<p>Do not enter any special characters in Username and Name</p>
<p> In case you forget your password, your password will be reset and sent to the email-id you have provided.</p>";
include_once("includes/footer.php");
}

 
 ?>
 