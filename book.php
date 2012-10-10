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
    $description=$_POST['purpose'];
    $user=$_SESSION['usrname'];
?>

<?php
            if($venue==""||$venue==NULL||$date==""||$date==NULL||$from==""||$from==NULL||$description==""||$description==NULL){
                   echo "Invalid input <br/>";
                   echo "<a href='usrpg.php'>Go back and book</a><br/>";
                   $flag=1;
                   exit();
                }
?>
<?php
        $tareek=explode("-", $date);
      //  echo "{$tareek[0]}%"; // piece1
       // echo "{$tareek[1]}%"; // piece2
        //echo "{$tareek[2]}%"; // piece2
        $samay=explode(":",$from);
        //echo "{$samay[0]}%"; // piece2
        //echo "{$samay[1]}%"; // piece2
       $qry2="SELECT * FROM book WHERE room='CS101'";
       $result2=mysql_query($qry2);
       while($row2=mysql_fetch_array($result2)){
                    //echo "${row2['room']}<br/>";
                    if($row2['date']==$date && $row2['room']==$venue){
                        $temp=explode(":", $row2['from']);
                        if($temp[0]==$samay[0]){
                            echo "clash";
                            exit();
                        }
                    }
       }
       
       $qry3="SELECT * FROM book WHERE room='CS102'";
       $result3=mysql_query($qry3);
       while($row3=mysql_fetch_array($result3)){
                    //echo "${row2['room']}<br/>";
                    if($row3['date']==$date && $row3['room']==$venue){
                        $temp=explode(":", $row3['from']);
                        if($temp[0]==$samay[0]){
                            echo "clash";
                            exit();
                        /*if($temp[0]+1=$samay[0]&&$samay[1]<$temp[1]+59){
                            echo "clash";
                            exit();*/
                        }
                    }
       }
      
?>

<?php       
                $qry="INSERT INTO `event`.`book` (`room`, `user`, `date`, `from`, `description`) VALUES ('$venue', '$user', '$date', '$from', '$description')";
                //echo $qry;
                mysql_query($qry);
                echo "Your event was booked successfully.<br/><a href='usrpg.php'>Book another event</a>";
?>
