<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Portfolio | Raushan Kumar</title>
<link rel="stylesheet" media="screen" href="styles.css" >
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>
<style type="text/css">
<!--
.style1 {
	font-size: 25px;
	color: #FFFFFF;
}
.style3 {color: #FFFFFF}
.style4 {
	font-size: 24px;
	color: #CCCCCC;
}
-->
</style>
</head>

<body>
<?php


//getting data from form

$name1=$_POST['uname'];
$email1=$_POST['email'];
$web1=$_POST['website'];
$address1=$_POST['address'];
$message12=$_POST['message'];



$con=mysql_connect("mysql5.000webhost.com","a9474442_raushan","raushan123");

//$con=mysql_connect("localhost","root","");
if(!$con)
	{
	die('could not connect to database:'.mysql_error());		
	}


mysql_select_db("a9474442_raudb",$con);


$result=mysql_query("INSERT INTO `a9474442_raudb`.`contact_us` (
`name` ,
`email` ,
`web` ,
`address` ,
`message` 
)
VALUES (
'$name1', '$email1', '$web1', '$address1', '$message12'
)");

//execute sql query
mysql_query($result,$con);



//close the connection
mysql_close($con);
?>
<style type="text/css">


body { background:rgb(74,81,85); }
div#menu { margin:5px auto; }
div#copyright {
    font:11px 'Trebuchet MS';
    color:#222;
    text-indent:30px;
    padding:40px 0 0 0;
}
div#copyright a { color:#aaa; }
div#copyright a:hover { color:#222; }
</style>
<table width="1000" border="0" align="center">
  <tr>
    <td width="655"><span class="style1"><strong>Raushan Kumar</strong></span></td>
    <td width="6">&nbsp;</td>
    <td width="325">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div id="menu">
    <ul class="menu">
        <li><a href="index.php" class="parent"><span>Home</span></a></li>
        <li><a href="about_me.php"><span>About Me</span></a></li>
        <li><a href="#"><span>Portfolio</span></a></li>
        <li><a href="services.php"><span>Services</span></a></li>
        <li><a href="blog.php"><span>Blog</span></a></li>
        <li><a href="quote.php"><span>Requeste a Quote</span></a></li>
        <li class="last"><a href="contacts.php"><span>Contacts</span></a></li>
    </ul>
</div></td>
  </tr>
  <tr>
    <td height="37">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><span class="style4">Thanks for contacting me.</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div id="copyright"><span class="style3">Copyright &copy; 2013 <a href="http://apycom.com/">Raushan Kumar</a></span></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
