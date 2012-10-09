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
    <body>
        <form action='chpass.php' method='post'>
            New Password<br/><input type="text" name="passnew"><br/>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>

<?php
    if(isset($_POST['passnew'])){
 $qry="UPDATE `event`.`prac` SET `pass` = '$_POST['passnew'] WHERE `prac`.`user` = 'mohit'";
 mysql_query($qry);
    }
?>
