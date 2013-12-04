
<?php //connceting to datbase 

$mysql_host = "mysql3.000webhost.com";
$mysql_database = "a9945215_userin";
$mysql_user = "a9945215_admin";
$mysql_password = "7UK8210";


$link = mysql_connect($mysql_host, $mysql_user, $mysql_password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
//mysql_close($link);
?>

<?

//wrong
	if ($_REQUEST["first"] == "") {
		echo "boo";
	}else{

		//pting nice message 
		echo "thank you dear <font color = 'pink'><b>" . $_REQUEST["first"] ."</b></font>";
		
		$query = "insert into $mysql_database.user_form (id, first, today) values (null, '" . $_REQUEST["first"] ."', now())";
		$res = mysql_query($query);
		if (!$res) echo "oops " . mysql_erro();
}	

//what I think I need to do:
//build a table to ask for user name & display time
//build table for user to input text info
//have site generate email that lullaby is ready
//have computer sing back text
//make it all look nice, make some moc ups for the css or pngs to be used
?>


<p align="left"><a href="javascript:history.go(-1)"> back</a>
<br>
