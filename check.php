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
	$qry="SELECT * FROM prac";
	$result=mysql_query($qry);
        $flag=0;
	if(!$result){
		die("database query failed: " . mysql_error());
	}
	while($row=mysql_fetch_array($result)){
		//echo $row['user'] . " " . $row['pass'] . "<br>";
                if(($row['user'])==($_POST['usrname'])){
                    if(($row['pass'])==md5(($_POST['passwd']))){
                        //echo "success";
                        //REDIRECT HIM TO HIS HOMEPAGE
                        $flag=1;
                        $_SESSION['usrname']=$_POST['usrname'];
                       // $_SESSION['passwd']=$_POST['passwd'];
                        echo $_SESSION['usrname'];
                        header("location:usrpg.php");
                    }
                    //else{
                      //  echo "Wrong username or password" . "<br/>" ;
                        //echo "<a href='index.html'>Go back to sign in</a>" ;
                   // }
                }
	}
                    if($flag==0){
                    echo "Wrong username or password" . "<br/>" ;
                    session_destroy();
                    echo "<a href='index.html'>Go back to sign in</a>";
                    }
                    
        
?>