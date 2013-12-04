<html>
<head>
	<title>NomadSymbols</title>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
</head>

<style type="text/css">
	.mytag1 {
		font-size:20px;
		color:red;
	} 
	#main{
		width: 60%;
		margin: 0 auto; 
		}
	li{
		list-style: none;
	}
	textarea{
		height:50px;
		width:300px;  
	}
	body{
		background-color: #fff; /* Old browsers */
		background: -moz-linear-gradient(top,  #1e5799 9%, #80ede4 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(9%,#1e5799), color-stop(100%,#80ede4)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #1e5799 9%,#80ede4 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #1e5799 9%,#80ede4 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #1e5799 9%,#80ede4 100%); /* IE10+ */
		background: linear-gradient(to bottom,  #1e5799 9%,#80ede4 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#80ede4',GradientType=0 ); /* IE6-9 */
		font-style: italic;
		font-family:Arial;
		font-weight: 200;
		font-size: x-large;
		color: white;
	}
</style>
</head>

<body>
	<div id="main"> 
	<link rel="apple-touch-icon" href="images/apple-touch-icon2.png">
	<!-- <img src="images/.png" />
	 --><!-- <span class='mytag1'>testing the css</span> -->
	<?

	$mysql_host = "mysql7.000webhost.com";
	$mysql_database = "a9945215_nomad";
	$mysql_user = "a9945215_nomad";
	$mysql_password = "cdiaz45;

	$link = mysql_connect($mysql_host, $mysql_user, $mysql_password);

	if($_POST["userText"]){
		$query = "insert into $mysql_database.user_form (id, first, today) values (null, '" . $_POST["userText"] ."', now())";
			$res = mysql_query($query); 
	/* 		print_r($res); */
			
			if ($res){
				//header("location: $PHP_SELF");			
			} else{
				echo "oops " . mysql_error();			
			}
			

	}

	$query = "select * from $mysql_database.user_form where today > DATE_SUB(NOW(), INTERVAL 1 day) order by today desc";
	//print $query;
	$res = mysql_query($query);
	$nb = mysql_numrows($res);

	?>
	<ul> 
	<?

	for ($i=0; $i<$nb; $i++ ){
		
		$id = mysql_result($res, $i, 'id');
		$first = mysql_result($res, $i, 'first');
		$date = mysql_result($res, $i, 'today');
		
		//row header
		echo "<li>$first</li>";

	}
		echo "</ul>";


	/* echo "<p> <table bgcolor='#eeeeee' border=0 cellspacing=3 cellpadding=3>"; 
	//row header
	echo "<tr>";
	echo "<td bgcolor='yellow'>ID</td>";
	echo "<td bgcolor='yellow'>first name</td>";
	echo "<td bgcolor='yellow'>Date </td>";
	echo "</tr>";

	for ($i=0; $i<$nb; $i++ ){

		
		$id = mysql_result($res, $i, 'id');
		$first = mysql_result($res, $i, 'first');
		$date = mysql_result($res, $i, 'today');
		
		//row header
		echo "<tr>";
		echo "<td>$id</td>";
		echo "<td>$first</td>";
		echo "<td>$date</td>";
		echo "</tr>";

	}
	echo "</table>";
	*/

	?>
	
	<p>Input your text here:</p>
	<form action="" method="post">
	<textarea name="userText"></textarea>
	<input type= "submit" name="submit" value="add">
	</form>

	</div>
</body>
</html>

<!-- <img src = "wallpaper-61045.jpg"> -->


