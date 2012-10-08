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
<head>
    <title>Status</title>
    <link rel="stylesheet" type="text/css" href="style_st.css"/>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery.vticker-min.js"></script>
    <script type="text/javascript">
$(function(){
        $("#news").vTicker({
		animation: 'fade',
		mousePause: false,
		showItems: 2
	});
});
</script>
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
                <td><a href="status.html">Current Status</a></td>
                <td><a href="index.html" >Sign In</a></td>
                </tr></table>
            </div>
    
    
            <b><h2 id="announce" style="color: green">Announcements:</h2></b>
            <div id="news">
                <ul>
		<li>CS 103 booked for next 3 days for yahoo HACK U !</li>
		<li>CS 101 holds departmental freshers for UG Y11 tomorrow from 7:30pm to 11pm.</li>
		<li>Farewell ceremony of Professor M.K Sharma in CS lounge today after 8pm.</li>
                <li>Labs are reserved for internship tests on weekend after 5pm in the evening </li>
		</ul>
	    </div><hr><hr><br/><br/><h1>BOOKINGS:</h1>
            <u><h2 style="color: red">CS 101</h2></u>
        <?php
	$qry="SELECT * FROM book ORDER BY date ASC";
	$result=mysql_query($qry);
	if(!$result){
		die("database query failed: " . mysql_error());
	}
	
	while($row=mysql_fetch_array($result)){
		if($row['room']=="CS101"){
                 echo "&nbsp&nbsp&nbsp&nbsp{$row['user']} booked for {$row['date']} from {$row['from']} till {$row['till']} <br/>&nbsp&nbsp&nbsp&nbsp <b>Description:</b>{$row['description']}";
                 echo "<hr>";
                }
	}
	?><br/><br/>
        <hr>
        <u><h2 style="color: red">CS 102</h2></u>
        <?php
	$qry="SELECT * FROM book ORDER BY date ASC";
	$result=mysql_query($qry);
	if(!$result){
		die("database query failed: " . mysql_error());
	}
	
	while($row=mysql_fetch_array($result)){
		if($row['room']=="CS102"){
                 echo "&nbsp&nbsp&nbsp&nbsp{$row['user']} booked for {$row['date']} from {$row['from']} till {$row['till']} <br/> &nbsp&nbsp&nbsp&nbsp<b>Description:</b>{$row['description']}";
                 echo "<hr>";
                }
	}
	?>
            
            <br/><br/>
    </div>


</body>
</html>
