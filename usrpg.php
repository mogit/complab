<?php
session_start();
?>
<?php
if(!isset($_SESSION['usrname'])){
    header("location:index.html");
    }
?>
<html>
<head>
    <title>usrpg</title>
    <link rel="stylesheet" type="text/css" href="style_u.css"/>
</head>

<body>

    <div id="wrapper">
            <div id="img">
            <img src="images/image1.jpg"/>
            </div>
            <div id="links">
                <table id="linktable"><tr>
                <td><a href="http://www.cse.iitk.ac.in/"> CSE Home</a></td> 
                <td><a href="resources.html">Resources</a></td>
                <td><a href="status.php">Current Status</a></td>
                <td><a href="signout.php" >Log Out</a></td>
                </tr></table>
            </div>
            <h1> Welcome
            <?php
            echo ucwords($_SESSION['usrname']);
            ?>
            </h1>
            <div id="all">
                <div id="booked">
            <h2> Your Current Bookings:</h2>
            <ul>
                <li> CS101-01/10/212-1800:2100-"Lecture on algorithms" &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button type="button">Edit</button>&nbsp&nbsp&nbsp&nbsp&nbsp <button type="button">Cancel</button></li><hr>
                <li>CS101-03/10/212-1800:2100-"Lecture on algorithms" &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button type="button">Edit</button>&nbsp&nbsp&nbsp&nbsp&nbsp <button type="button">Cancel</button></li><hr>
                <li>CS101-05/10/212-1830:2100-"Workshop on Android" &nbsp&nbsp&nbsp&nbsp&nbsp <button type="button">Edit</button>&nbsp&nbsp&nbsp&nbsp&nbsp <button type="button">Cancel</button></li><hr>
                <li>CS101-06/10/212-1830:2100-"Workshop on Android" &nbsp&nbsp&nbsp&nbsp&nbsp <button type="button">Edit</button>&nbsp&nbsp&nbsp&nbsp&nbsp <button type="button">Cancel</button></li><hr>
            </ul><br/><br/><br/>
            </div>
                <hr style="height: 10px"
                <hr style="height:10px">
            <div id="make">
            <h2>Event Booking:</h2>
            <form name="book" action="book.php" method="post">
                <b>Venue:</b> <select name="venue">
                    <option value="CS101">CS101</option>
                    <option value="CS102">CS102</option>
                    
                    </select>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <b>Date(yyyy-mm-dd):</b><input type="text" name="date">&nbsp&nbsp&nbsp&nbsp&nbsp
                    <b>From(hh:mm):</b><input type="text" name="from">
                    <b>Till(hh:mm):</b><input type="text" name="till">
                    <br/><br/>
                    
                    <b>Purpose:</b><br/>
                    <textarea rows="4" cols="40" name="purpose">
                        
                    </textarea><br/><br/>
                    
                    <b>Tags:</b><br/>
                    <textarea rows="2" cols="40">
                        
                    </textarea><br/><br/>
                
                    <b>Comments for viewers:</b><br/>
                    <textarea rows="4" cols="40">
                        
                    </textarea><br/><br/>
                    <button type="submit">Submit</button>
            </form>
                    <hr>
            <h2>Regular Bookings:</h2>
            <form name="rbook" >
                <b>Venue:</b> <select name="venue">
                    <option value="CS101">CS101</option>
                    <option value="saab">CS102</option>
                    </select>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <b>Day:</b><select name="week">
                    <option value="C101">Monday</option>
                    <option value="saab">Tuesday</option>
                    <option value="fiat" selected="selected">Wednesday</option>
                    <option value="audi">Thursday</option>
                    <option value="audi">Friday</option>
                    <option value="audi">Saturday</option>
                    </select>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <b>Duration(hhmm-hhmm):</b><input type="text">
                    <br/><br/>
                    <b>From(dd/mm/yy):</b><br/> <input type="text"><br/>
                    <b>Till(dd/mm/yy):</b> <br/><input type="text"><br/><br/>
                    
                    <b>Purpose:</b><br/>
                    <input type="radio">Lecture &nbsp&nbsp&nbsp&nbsp&nbsp <input type="radio">Lab &nbsp&nbsp&nbsp&nbsp&nbsp <input type="radio">Seminar<br/><br/>
                    
                    <b>Tags:</b><br/>
                    <textarea rows="2" cols="40">
                        
                    </textarea><br/><br/>
                
                    <b>Comments for viewers:</b><br/>
                    <textarea rows="4" cols="40">
                        
                    </textarea><br/>
                    <button type="Submit">Submit</button>
                    #NOTE: Its fuctionality is no more a part of assignment.
                        
            
            </form>
            </div>
            </div> 
    </div>

</body>
</html>
