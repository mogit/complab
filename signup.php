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
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mail=$_POST['mail'];
    $tel=$_POST['tel'];
    $usrname=$_POST['usrname'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
?>

<?php
        $flag=0;
	
                if($fname==""||$fname==NULL||$lname==""||$lname==NULL||$mail==""||$mail==NULL||$tel==""||$tel==NULL||$usrname==""||$usrname==NULL||$pass1==""||$pass1==NULL||$pass2==""||$pass2==NULL){
                   echo "Please fill in all the details <br/>";
                   echo "<a href='signup.html'>Go back and sign up</a><br/>";
                   $flag=1;
                   exit();
                }
                if($pass1!=$pass2){
                    echo "Passwords do not match <br/>";
                    echo "<a href='signup.html'>Go back and sign up</a>";
                    $flag=1;
                    exit();
                }
                $qry1="SELECT * FROM prac";
                $result=mysql_query($qry1);
                while($row=mysql_fetch_array($result)){
		//echo $row['user'] . " " . $row['pass'] . "<br>";
                if(($row['user'])==$usrname){
                    echo "Sorry, username already exists <br/>";
                    $flag=1;
                    echo "<a href='signup.html'>Try another username</a>";
                    break;
                    }
                    //else{
                      //  echo "Wrong username or password" . "<br/>" ;
                        //echo "<a href='index.html'>Go back to sign in</a>" ;
                   // }
                }
                
                //echo $flag;
                if($flag!=1){
                $qry="INSERT INTO `event`.`prac` (`user` ,`pass`)VALUES ('$usrname','$pass1')";
                //echo $qry;
                mysql_query($qry);
                echo "Successfully Registered.<a href='index.html'>Sign In here</a>";
                }
                
        
?>
