<html>
<head>
<title>Administrator</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body bgcolor="#b9c7fd" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/Untitled-2_02.jpg')">
<!-- ImageReady Slices (Untitled-1.psd) -->
<br><table id="Table_01" width="800" height="295" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td height="206" colspan="3">
			<img src="images/Untitled-1_01.jpg" width="800" height="206" alt=""></td>
	</tr>
	<tr>
		<td width="163" height="46"><a href="home.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','images/Untitled-2_02.jpg',1)"><img src="images/Untitled-1_02.jpg" name="Image4" width="163" height="46" border="0"></a></td>
		<td width="165"><img src="images/Untitled-2_03.jpg" width="165" height="46"></a></td>
		<td width="472"><?php 
		session_start();
		$al = $_SESSION['accesslayer'];
		if( $al!= NULL)
		echo "<a href=\"logout.php\">Logout</a>";
		
		?></td>
	</tr>
	<tr>
		<td colspan="3" valign="top"><label></label>
		 
		<table border="1"><tr><td><strong>ID</strong></td>
		<td><strong>Name</strong></td>
		<td><strong>Family name</strong></td>
		<td><strong>Melli Number</strong></td>
		</tr> <?php
session_start();
if($_SESSION['accesslayer'] == "admin"){
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("eydl", $con) or die(mysql_error());

$sql = mysql_query("SELECT * FROM user WHERE login = 'user'");
while ($row = mysql_fetch_array($sql))
{
echo "<tr><td>";
echo $row['ID'];
echo "</td>";
echo "<td>";
echo $row['name'];
echo "</td>";
echo "<td>";
echo $row['fname'];
echo "</td>";
echo "<td>";
echo $row['melli'];
echo "</td></tr>";
}
mysql_close($con);
}
else
{$URL="home.php";
header ("Location: $URL");}
	?> </table>
		  <form action="adminselect.php" name="form1" method="post">
		    <p>Enter the User ID you want to be admin:
              <label>
              <input type="text" name="id">
              </label>
		      <input type="submit" name="Submit" value="Submit">
		    </p>

		  </form>
	      <form action="docselect.php" name="form2" method="post">
		    <p>Enter the User ID you want to be doctor:
              <label>
              <input type="text" name="id">
              </label>
		      <input type="submit" name="Submit" value="Submit">
		    </p>
		  </form>
	  </td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>