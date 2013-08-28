<?php
session_start();
 echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Crypto - Forgot Password || Takneek</title>
";

include_once("includes/header.php");
echo"
<div id=\"login\" style=\"width:400px;float:left;margin-left:35%\">
    <p><h2>Enter your Username and Email-Id here:</h1></p>
	<form action=\"fp2.php\" method=\"POST\">
	
		<br/><b>Username:</b> &emsp;<input type='text' class='textbox' name='username' /> <br />
		<br/><b>Email-Id: </b> &emsp;<input type='text' class='textbox' name='emailid'/><br /><br/>
		<input class = 'btn' type='submit' value='Submit'>&emsp;</form><br/>";



include_once("includes/footer.php");
 ?>