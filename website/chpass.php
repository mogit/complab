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

<html>
    <body>
        <form action='chpass.php' method='post'>
            New Password<br/><input type="password" name="passnew"><br/>
            Confirm Password<br/><input type="password" name="cpassnew"><br/>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>

<?php
    if(isset($_POST['passnew'])){
        //echo "----{$_POST['cpassnew']}----";
        if($_POST['passnew']==($_POST['cpassnew'])){
        $pass=md5($_POST['passnew']);
        $user=$_SESSION['usrname'];
        $qry= "UPDATE `event`.`prac` SET `pass` = '$pass' WHERE `prac`.`user` = '$user'";
        mysql_query($qry);
        echo "Password successfully changed<br/>";
        echo "<a href='usrpg.php'>Click here</a> to go back";
        }
        else{
            echo "<b>Passwords did not match</b><br/><br/>Try Again<br/>OR<br/><a href='usrpg.php'>Click here</a> to go back";
        }
    }
?>
