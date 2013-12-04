
<?
$mysql_host = "mysql7.000webhost.com";
$mysql_database = "a9945215_nomad";
$mysql_user = "a9945215_nomad";
$mysql_password = "cdiaz45";

$link = mysql_connect($mysql_host, $mysql_user, $mysql_password);
mysql_select_db($mysql_database);

function send_email($content){
	$res = mail('clarisadiaz@gmail.com' ,'Nomad Response', $content);
	return $res; 
}

function get_user_content(){
	$usertext = "";
	$query = "select * from $mysql_database.user_form where today > DATE_SUB(NOW(), INTERVAL 1 day) order by today desc";
	//print $query;
	$res = mysql_query($query);
	$nb = mysql_numrows($res);
	echo $nb;
	while ($row = mysql_fetch_assoc($res)) {
    	$usertext .= $row["first"];
    	$usertext .= ". "; 
	}

	return $usertext;
}

function gen_mp3($content){
	$content = urlencode($content);
	$url = "http://tts-api.com/tts.mp3?q=$content&return_url=1";
	echo $url; 
	$res = fopen($url, "r");
	return stream_get_contents($res);  
	
}
	$content = get_user_content();
	$mp3 = gen_mp3($content);
	send_email($mp3);

?>

