<?php
session_start();
?>
<html>
<head>
    <title>Resources</title>
    <link rel="stylesheet" type="text/css" href="style_r.css"/>
</head>

<body>
    <div id="wrapper">
            <div id="img">
            <img src="images/image1.jpg"/>
            </div>
            <div id="links">
                <table id="linktable"><tr>
                <td><a href="http://www.cse.iitk.ac.in/"> CSE Home</a></td> 
                <td><a href="resources.php">Resources</a></td>
                <td><a href="status.php">Current Status</a></td>
                <?php
                if(!isset($_SESSION['usrname']))
                {
                echo "<td><a href='index.html' >Sign In</a></td>";
                }
                else{
                //echo "<td><a href='usrpg.php' >Book</a></td>";
                echo "<td><a href='signout.php' >Log Out</a></td>";
                }
                ?>
                </tr></table>
            </div>
            
            <div id="rtable">
                <ul><b>
                    <li> CS101 </li><hr>
                    <li> CS102 </li><hr>
                    <li> CS103 </li><hr>
                    <li>CS210</li><hr>
                    <li>CS 314</li><hr>
                    <li> CSE Lounge </li><hr>
                    <li> CSE Labs </li><br/>
                </b></ul>
            </div>
            <div id="description">
            <h2>Description:</h2><hr>
            <p id="para">
                <h3>CS101</h3>
                <-----------------------------------Here---------------------------------------------------------<br>
                <-----------------------------------Information---------------------------------------------------<br>
                <---------------------------------About Selected resouree-----------------------------------------<br>
                <----------------------------------From the left list----------------------------------------------<br>
                <-----------------------------------Will be dynamically---------------------------------------------<br>
                <-------------------------------------displayed----------------------------------------------------<br>
                <--------------------------------For eg. for CS 101---------------------------------------------------<br>
                <--------------------------------TEXT WILL COME HERE-------------------------------------------------<br>
                <----------------advantage: no need to scroll, all text in this para itself--------------------------<br>
                
            </p></div>
    </div>



</body>
</html>
