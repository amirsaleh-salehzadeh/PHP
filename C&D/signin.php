<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$uname = $_POST ["id"];
$pass = $_POST ["pass"];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("eydl", $con) or die(mysql_error());
$sql = mysql_query("SELECT * FROM user WHERE ID = '$uname' AND melli = '$pass'");

$row = mysql_fetch_array($sql);

if (!$row)
{
$msg = "Invalid Username and password";
$_SESSION['msg'] = $msg;
$URL="home.php";
header ("Location: $URL");
}
else
{
$_SESSION['msg'] = NULL;
$name = $row['name'];
$fname = $row['fname'];
$login = $row['login'];
$msgt = "welcome $name $fname !";
$_SESSION['wcmsg'] = $msgt;
$_SESSION['userdetail'] = $uname;
$_SESSION['accesslayer'] = $login;
}
if ($login == "admin")
{
$URL="admin.php";
header ("Location: $URL");
}
if ($login == "doc")
{
$URL="doc.php";
header ("Location: $URL");
}
if ($login == "user")
{
$URL="bank.php";
header ("Location: $URL");
}

mysql_close($con);
?>
</body>
</html>
