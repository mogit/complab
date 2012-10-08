<?php
	$connection = mysql_connect("localhost","root","qwerty");
	if(!$connection){
		die("Database connection failed :" . mysql_error());
	}
	
	$db_select = mysql_select_db("event",$connection);
	if(!$db_select){
		die("Database selection failed: " . mysql_error());
	}
?>

<html>
	<head>
		<title>database</title>
	</head>

<body>
	<?php
	$qry="SELECT * FROM prac";
	$result=mysql_query($qry);
	if(!$result){
		die("database query failed: " . mysql_error());
	}
	
	while($row=mysql_fetch_array($result)){
		echo $row['user'] . " " . $row['pass'] . "<br>";
	}
	?>

</body>
</html>
<?php
	mysql_close();
	?>