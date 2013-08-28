
<?php
session_start();
if (isset($_SESSION['user']))
{
header("Location:userhome.php");
}
else{
echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Crypto 2013 || Takneek</title>";

include_once("includes/header.php");

echo"


<div id=\"login\" style=\"width:320px;float:left;margin-left:35%\">
    
	<form action=\"login.php\" method=\"POST\">
	<div align=\"center\">
		<font color=\"wheat\" size=7><b>LOGIN </b></font>
	</div>
		<br/><b>Username:</b> &emsp;<input type='text' class='textbox' name='username' /> <br />
		<br/><b>Password: </b> &emsp;<input type='password' class='textbox' name='password'/><br /><br/>
		<input class = 'btn' type='submit' value='LOGIN'></form>
		&emsp;<a href=\"newuser.php\"><input class = 'btn' type='submit' value='REGISTER'></a>
		<br/><br/> <a href=\"forgot.php\">Forgot Password?</a>

		<br />

</div>";


include_once("includes/footer.php");

}
?>
