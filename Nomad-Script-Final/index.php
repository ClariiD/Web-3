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
		font-style: normal;
		font-family: 'Nomad';		
		font-weight: 200;
		font-size: 100px;
		color: black;

	}
	.credit{
		font-style: italic;
		font-family:Arial;
		font-weight: 20;
		font-size: normal;
		color: black;
	}
	p{
		margin-top: 30px;
	}
	textarea{
		height:50px;
		width:300px;  
	}
	body{
		background-color: #fff; /* Old browsers */
		background: -moz-linear-gradient(top,  #fff 9%, #C0C0C0 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(9%,#fff), color-stop(100%,#C0C0C0)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #fff 9%,#C0C0C0 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #fff 9%,#C0C0C0 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #fff 9%,#C0C0C0 100%); /* IE10+ */
		background: linear-gradient(to bottom,  #fff 9%,#C0C0C0 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff', endColorstr='#C0C0C0',GradientType=0 ); /* IE6-9 */
		font-style: italic;
		font-family:Arial;
		font-weight: 200;
		font-size: x-large;
		color: black;
	}

	@font-face {
	font-family: 'Nomad';
	src:url('fonts/Nomad.eot');
	src:url('fonts/Nomad.eot?#iefix') format('embedded-opentype'),
		url('fonts/Nomad.ttf') format('truetype'),
		url('fonts/Nomad.woff') format('woff'),
		url('fonts/Nomad.svg#Nomad') format('svg');
	font-weight: normal;
	font-style: normal;
	}

	[class^="icon-"], [class*=" icon-"] {
		font-family: 'Nomad';
		speak: none;
		font-style: normal;
		font-weight: normal;
		font-variant: normal;
		text-transform: none;
		line-height: 1;

		/* Better Font Rendering =========== */
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
	}

	.icon-w-01:before {
		content: "\77";
	}
	.icon-z-01:before {
		content: "\7a";
	}
	.icon-x-01:before {
		content: "\78";
	}
	.icon-y-01:before {
		content: "\79";
	}
	.icon-t-01:before {
		content: "\74";
	}
	.icon-u-01:before {
		content: "\75";
	}
	.icon-v-01:before {
		content: "\76";
	}
	.icon-m-01:before {
		content: "\6d";
	}
	.icon-n-01:before {
		content: "\6e";
	}
	.icon-o-01:before {
		content: "\6f";
	}
	.icon-p-01:before {
		content: "\70";
	}
	.icon-q-01:before {
		content: "\71";
	}
	.icon-l-01:before {
		content: "\6c";
	}
	.icon-k-01:before {
		content: "\6b";
	}
	.icon-s-01:before {
		content: "\73";
	}
	.icon-r-01:before {
		content: "\72";
	}
	.icon-b-01:before {
		content: "\62";
	}
	.icon-c-01:before {
		content: "\63";
	}
	.icon-d-01:before {
		content: "\64";
	}
	.icon-e-01:before {
		content: "\65";
	}
	.icon-f-01:before {
		content: "\66";
	}
	.icon-g-01:before {
		content: "\67";
	}
	.icon-h-01:before {
		content: "\68";
	}
	.icon-a-01:before {
		content: "\61";
	}
	.icon-i-01:before {
		content: "\69";
	}
	.icon-j-01:before {
		content: "\6a";
	}

</style>
</head>

<body>
	<div id="main"> 
	<link rel="apple-touch-icon" hrefl="images/apple-touch-icon2.png">

	<?

	$mysql_host = "mysql7.000webhost.com";
	$mysql_database = "a9945215_nomad";
	$mysql_user = "a9945215_nomad";
	$mysql_password = "cdiaz45";

	$link = mysql_connect($mysql_host, $mysql_user, $mysql_password);

	if (isset($_POST["userText"])){
		$query = "insert into $mysql_database.user_form (id, response, today) values (null, '" . $_POST["userText"] ."', now())";
			$res = mysql_query($query); 

			if ($res){

			} else{
				echo "oops " . mysql_error();			
			}
	}

	$query = "select * from $mysql_database.user_form where today > DATE_SUB(NOW(), INTERVAL 1 day) order by today desc";
	$res = mysql_query($query);
	$nb = mysql_numrows($res);

	?>
	<p>___________ is where I want to be.</p>
	<form action="" method="post">
	<textarea name="userText"></textarea>
	<input type= "submit" name="submit" value="add">
	</form>
	<ul> 
	<?

	for ($i=0; $i<$nb; $i++ ){
		
		$id = mysql_result($res, $i, 'id');
		$response = mysql_result($res, $i, 'response');
		$date = mysql_result($res, $i, 'today');
		echo "<li>$response</li>";

	}
		echo "</ul>";

	?>
	<p class="credit">Nomad Script is a project by <a href="http://clariidiaz.tumblr.com/">Clarisa Diaz</a>
	</p>

	</div>
</body>
</html>


