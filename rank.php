<?php
include('dbconnect.php');
session_start();
$results=mysql_query("SELECT * FROM players ORDER BY level DESC");
$rownum = mysql_num_rows($results);
echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Ranking | Crypto || Takneek</title>";

include_once("includes/header.php");

echo"
<div id='rank' style='margin-left:35%;'>
<table id='gradient-style'>
<thead>
    	<tr>
        	<th scope='col'>Rank</th>
            <th scope='col'>Username</th>
            <th scope='col'>Pool</th>
            <th scope='col'>Points</th>
        </tr>
    </thead>
    <tbody>
    

";



FOR ($i=0 ; $i<$rownum ; $i++)
{
	$row = mysql_fetch_array($results);
	switch ($row['pool']) {
			case 'A':
			$userpool="Marathas";
			break;
			case 'B':
			$userpool="Mauryans";
			break;
			case 'C':
			$userpool="Mughals";
			break;
			case 'D':
			$userpool="Rajputs";
			break;
		
		default:
			$userpool=" ";
			break;
	}

	echo "<tr>
			<td>".($i+1)."</td>
			<td width=\"180px\">".$row['username']."</td>
			<td width=\"150px\">".$userpool."</td>
			<td width=\"150px\">".($row['level']-1)."</td>
		</tr>";
}



echo "
  
    </tbody>
</table>
</div>";

include_once("includes/footer.php");


?>
