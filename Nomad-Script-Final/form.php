<?php //connecting to datbase 

$mysql_host = "mysql7.000webhost.com";
$mysql_database = "a9945215_nomad";
$mysql_user = "a9945215_nomad";
$mysql_password = "cdiaz45";


$link = mysql_connect($mysql_host, $mysql_user, $mysql_password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
//mysql_close($link);
?>

<?
//wrong
	if ($_REQUEST["response"] == "") {
		echo "boo";
	}else{

		//pting nice message 
		echo "thank you  <font color = 'pink'><b>" . $_REQUEST["response"] ."</b></font>";
		
		$query = "insert into $mysql_database.user_form (id, response, today) values (null, '" . $_REQUEST["response"] ."', now())";
		$res = mysql_query($query);
		if (!$res) echo "oops " . mysql_erro();
}	
?>

<p align="left"><a href="javascript:history.go(-1)"> back</a>
<br>
