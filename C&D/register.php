<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("eydl", $con) or die(mysql_error());

session_start();

$name = $HTTP_POST_VARS ["name"];
$fname = $HTTP_POST_VARS ["fname"];
$email = $HTTP_POST_VARS ["email"];
$address = $HTTP_POST_VARS ["address"];
$tel = $HTTP_POST_VARS ["tel"];
$melli = $HTTP_POST_VARS ["melli"];
$pdlnum = $HTTP_POST_VARS ["pdlnum"];
$pdlyear = $HTTP_POST_VARS ["pdlyear"]; 


mysql_query("INSERT INTO user (name, fname, melli, pdlnumber, pdldate, email, telephone, address )
VALUES ('$name', '$fname', '$melli', '$pdlnum', '$pdlyear', '$email', '$tel', '$address')");
mysql_close($con);
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("eydl", $con) or die(mysql_error());

$result = mysql_query("SELECT * FROM user WHERE melli = '$melli' AND name = '$name' AND fname = '$fname'");

while ($row = mysql_fetch_array($result)){
$t = $row['ID'];
}
$usern = " Registration successful! your user name is $t and your password is your Melli number";

$_SESSION['usern'] = $usern;

header ("Location: home.php");

?>
</body>
</html>
