<?php

include("dbconnect.php");
session_start();

$lvlc=$_POST['level'];  
$answer=$_POST['ans'];

if(isset($_SESSION['user']) && isset($lvlc) && isset($answer))
{
  $ip=$_SERVER["REMOTE_ADDR"]; 
  date_default_timezone_set('Asia/Calcutta');
  $today = date("F j, Y, g:i a");
  $user=$_SESSION['user'];
  $lvlc=$_POST['level'];  
  $answer=md5($_POST['ans']);
  $result=mysql_query("select * from qnsans where level='$lvlc' AND ans='$answer'", $db);
  $lev=mysql_query("select * from players where username='$user'", $db);
  $lev2=mysql_fetch_array($lev);
  $levmax=$lev2['level']; 

  switch ($lev2['pool']) 
  {
    case 'A':
      $pool="Marathas";
      break;
    case 'B':
      $pool="Mauryans";
      break;
    case 'C':
      $pool="Mughals";
      break;
    case 'D':
      $pool="Rajputs";
      break;
    default:
      $userpool=" ";
      break;
  }

  if($lvlc>$levmax)
  {
    header("Location: userhome.php"); 
  }

  $rowCheck = mysql_num_rows($result);
  $lvlcup = $lvlc+1; 

  if($rowCheck ==1 && $lvlcup>$levmax) 
  {
    $update=mysql_query("UPDATE players SET level='$lvlcup' WHERE username='$user'", $db);
    $filename="log.txt";
    $file=fopen($filename,"a");
    fwrite($file,($user."\t".$lvlc."\t ".$pool."\t".$ip."\t".$today."\n"));
    header("Location: userhome.php");
  }
  else
  {
    header("Location: userhome.php"); 
  }
}
elseif (!isset($username) || !isset($password)) 
{
  header( "Location: index.php" );
}

elseif (empty($username) || empty($password)) 
{
  header( "Location: index.php" );
}
?>