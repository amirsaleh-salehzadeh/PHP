<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">

<title>AMS----Shop</title>
<LINK href="main.css" rel=stylesheet>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
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

<body>
<table width="800" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/main-page_01.gif" width="800" height="180" alt="logo1"/></td>
  </tr>
  <tr>
    <td><table width="800" border="0" cellpadding="0" cellspacing="0" >
      <tr>
        <td><a href="main-page.html"></a><a href="main-page.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','images/main-page1_02.gif',1)"><img src="images/main-page2_02.gif" alt="main" name="Image6" width="150" height="39" style="border:none"></a></td>
        <td><a href="shop.html"></a><a href="shop.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','images/main-page1_03.gif',1)"><img src="images/main-page2_03.gif" alt="shop" name="Image7" width="150" height="39" style="border:none"></a></td>
        <td><a href="contact.html"></a><a href="contact.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','images/main-page1_04.gif',1)"><img src="images/main-page2_04.gif" alt="contact" name="Image8" width="149" height="39" style="border:none"></a></td>
        <td><img src="images/main-page_05.gif" alt="logo2" width="351"/></td>
     </tr> 
    </table></td>
  </tr>
  <tr>
    <td><?php
$pg=$_POST["pureglut"];
$ap=$_POST["awprotein"];
$wp=$_POST["wheyprotein"];
$mc=$_POST["monocreatine"];
$product = array($pg,$ap,$wp,$mc);
$name = array("100% Pure L-Glutamine. ","Awesome Mass - Horleys. ","100% Whey Protein. ","100% Pure Creatine Monohydrate. ");
//prices
$pgp=65;
$awpp=70;
$wpp=18;
$mcp=33;
echo "You have choose ";

for ($j=0; $j<4; $j++)
{
if ($product[$j] != 0)
{
echo $product[$j];
echo " number of "; 
echo $name[$j];
$x++;
}
}
if ($x == 0)

echo "nothing";

?>
</td>
  </tr>
</table>
<p>
    <a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-html401"
        alt="Valid HTML 4.01 Strict" height="31" width="88"></a>
  </p>

</body>
</html>
