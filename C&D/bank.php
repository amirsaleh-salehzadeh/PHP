<html>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/JavaScript">
<!--
function checkform ( form )
{
  if (form.number.value == "") {
    alert( "Please enter your bank reciept number address." );
    form.number.focus();
    return false ;
  }
    if (form.date.value == "") {
    alert( "Please enter the date which you want to visited by the doctor." );
    form.date.focus();
    return false ;
  }
    if (form.interval.value == "") {
    alert( "Please enter the date which you want to visited by the doctor." );
    form.interval.focus();
    return false ;
  }
  
  return true ;
}
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
<body bgcolor="#b9c7fd" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (Untitled-1.psd) -->
<br>
<table id="Table_01" width="749" height="295" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td height="206" colspan="3">
			<img src="images/Untitled-1_01.jpg" width="800" height="206" alt=""></td>
	</tr>
	<tr>
		<td width="163" height="46"><img src="images/Untitled-2_02.jpg" width="163" height="46"></a></td>
		<td width="165"><a href="register.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','images/Untitled-2_03.jpg',0)"><img src="images/Untitled-1_03.jpg" name="Image5" width="165" height="46" border="0"></a></td>
		<td width="475"><?php 
		session_start();
		$al = $_SESSION['accesslayer'];
		if( $al!= NULL)
		echo "<a href=\"logout.php\">Logout</a>";
		
		?></td>
	</tr>
	<tr>
	  <td colspan="3">
      <p style="color:#FF0000"><?php 
echo $_SESSION['wcmsg'];
$_SESSION['wcmsg'] = NULL;

	  ?></p>
      <p>Please insert the bank payment number</p>
	      <form name="form1" method="post" action="gettime.php" onsubmit="return checkform(this);">
	        <label>
	          <input type="text" name="number">
            </label>
            <p>
              <?php		$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("eydl", $con) or die(mysql_error());

session_start();
echo "select the doctor ID";
echo "<select name=\"doc\">";
$sql = mysql_query("SELECT * FROM user WHERE login = 'doc'");
while ($row = mysql_fetch_array($sql))
{
echo "please select a doctor ID";
echo  "<option>";
echo $row['ID'];
echo "</option>";
}
echo "</select>";

if ($_SESSION['errordate'] != NULL)
{
$ermsgd = $_SESSION['errordate'];
echo "<p style=\"color:#FF0000\">";
echo $ermsgd;
echo "</p>";
$_SESSION['errordate'] = NULL;
}
echo "<br>please insert a date to get time to visit the doctor (yyyy-mm-dd)";
echo "<input type=\"text\" name=\"date\">";
if ($_SESSION['errortime'] != NULL)
{
$ermsg = $_SESSION['errortime'];
echo "<p style=\"color:#FF0000\">";
echo $ermsg;
echo "</p>";
$_SESSION['errortime'] = NULL;
}
echo "<br>please enter the time you want to visit the doctor";
echo "<input type=\"text\" name=\"interval\">";
  ?>
            <br><label>next
            <input type="submit" name="Submit" value="Submit">
            </label>          
		    </p>
	      </form></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>