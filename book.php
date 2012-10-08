<?php
session_start();
?>
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
<?php
    $venue=$_POST['venue'];
    $date=$_POST['date'];
    $from=$_POST['from'];
    $till=$_POST['till'];
    $description=$_POST['purpose'];
    $user=$_SESSION['usrname'];
?>

<?php       
                $qry="INSERT INTO `event`.`book` (`room`, `user`, `date`, `from`, `till`, `description`) VALUES ('$venue', '$user', '$date', '$from', '$till', '$description')";
                //echo $qry;
                mysql_query($qry);
                echo "Your event was booked successfully.<a href='usrpg.php'>Book another event</a>";
?>
