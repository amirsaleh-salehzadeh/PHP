<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

$box=$HTTP_POST_VARS['id'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("eydl", $con) or die(mysql_error());


mysql_query("UPDATE `user` SET `login` = 'doc' WHERE `ID` ='$box'");

$URL="adminuserselect.php";
header ("Location: $URL");
mysql_close($con);


?>
</body>
</html>
