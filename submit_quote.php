<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Portfolio | Rushan Kumar</title>
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
$phone1=$_POST['phone'];
$web1=$_POST['website'];
$address1=$_POST['address'];
$purpose1=$_POST['purpose'];
$comment1=$_POST['comment'];

//mail function
$to = "raushankumar.it@gmail.com";
$subject = "quote from web site";
$message = "His name is:".$name1."<br>"."his phone no is:".$phone1."<br>"."his URL:".$web1."<br>"."he is from:".$address1."<br>"."purpose:".   $purpose1."<br>".$comment1;
$from = "$email1";
$headers = "From:" . $email1;
mail($to,$subject,$message,$headers);



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
    <td colspan="3"><span class="style4">Thanks for your Quote, We'll call you as soon as possible.</span></td>
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
