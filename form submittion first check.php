<?php


//getting data from form

$name1=$_POST['uname'];
$email1=$_POST['email'];
$web1=$_POST['website'];
$address1=$_POST['address'];
$message12=$_POST['message'];



//$con=mysql_connect("mysql2.000webhost.com","a5344359_tilak","rajtilak123");

$con=mysql_connect("localhost","root","");
if(!$con)
	{
	die('could not connect to database:'.mysql_error());		
	}


mysql_select_db("a5344359_tilakdb",$con);


$result=mysql_query("INSERT INTO `a5344359_tilakdb`.`contact_us` (
`sl_no` ,
`name` ,
`email` ,
`web` ,
`address` ,
`message`
)
VALUES (
'1', '$name1', '$email1', '$web1', '$address1', '$message12')");

//execute sql query
mysql_query($result,$con);



//close the connection
mysql_close($con);
?>