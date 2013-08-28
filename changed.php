<?php
session_start();
if($_SESSION['sent']!=1)
{
	header("Location: userhome.php");
}
 echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Crypto - Forgot Password || Takneek</title>
";

include_once("includes/header.php");
echo"
<div id=\"login\" style=\"width:400px;float:left;margin-left:35%\">
   <b><big><big> A new password has been sent to the email you provided. Please check your inbox.</b></big></big>";



include_once("includes/footer.php");
 ?>