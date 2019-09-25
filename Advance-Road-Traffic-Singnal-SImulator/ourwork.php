<?php
$msg="";
if(isset($_POST['login']))
{
	$servername = "localhost";
	$username = "id5201207_112233";
	$password = "112233";
	$dbname = "id5201207_rto";
			
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			$amount=$_POST['amount']; $rid=$_GET['rid'];
			$sql = "SELECT * FROM register where rid=$rid";
			$result = $conn->query($sql);
			if ($result->num_rows > 0){$row = $result->fetch_assoc(); $amt=$row['balence'];}
			
			$tot=$amount+$amt;
			$sql = "update register SET balence='$tot' WHERE rid='$rid'";
			if(mysqli_query($conn, $sql))
			{
				header("Location:profile.php?rid=$rid");
			}
}
?>
<style>
.but1 {
     background-color: #2b3856; 
    border: none;
    color: white;
    padding: 8px;
    text-align: center;
	border-radius: 4px;
    font-size: 14px;
	width: 95%;
}
.but1:hover{
	background-color: grey;
}
input { 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);	
}
select {
ackground-position:300px;
width:353px;
padding:8px;
border-radius:5px;
color:blue;
font-size:15px;
box-shadow:inset 0 0 10px 0 rgba(0,0,0,0.6);
}
</style>
<!DOCTYPE html> 
<html>

<head>
  <title>MMIT Aptitute Test</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
	  <div id="banner">
	    <div id="welcome">
	      <h2><font face=tahoma size=6><b>Advance Road Signal Tracking System</b></font></h2>
	    </div><!--close welcome-->			  	
	  </div><!--close banner-->	
	</header>
	
	<nav>
	  <div id="menubar">
        <ul id="nav">
          <li class="current"><a href="index.php">Home</a></li>
          <li><a href="admini.php">Admin Login</a></li>
		  <li><a href="testimonials.php">User Login</a></li>
          <li><a href="projects.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div><!--close menubar-->	
    </nav>	
    
	<div id="site_content">		
		<br><br><br>
	  <form method="post" action="">
		<center><h1><font face=tahoma size=3px color=red><i><?php echo $msg; ?></i></h1></center>
		<center><table background='play.jpg'  height=auto style='border-radius:  10px 10px 10px 10px'>
		<tr><td colspan=2><center><br><h1><font face=tahoma size=5>Add Mony </font></h1></center><br></td></tr>
		<tr><td> &nbsp &nbsp &nbsp &nbsp Enter Name as on Card:</font></td><td><center><input type="text" name="name" required> &nbsp &nbsp &nbsp &nbsp </center></td></tr>
		<tr><td> &nbsp &nbsp &nbsp &nbsp Enter Card No:</font></td><td><center><input type="text" name="name" required> &nbsp &nbsp &nbsp &nbsp </center></td></tr>
		<tr><td> &nbsp &nbsp &nbsp &nbsp Enter CVV No:</font></td><td><center><input type="text" name="name" required> &nbsp &nbsp &nbsp &nbsp </center></td></tr>
		<tr><td> &nbsp &nbsp &nbsp &nbsp Enter Amount to add:</font></td><td><center><input type="text" name="amount" required> &nbsp &nbsp &nbsp &nbsp </center></td></tr>
		<tr><td colspan=2><center><br><button type="submit" name='login' class="but1">Submit</button><br><br></center></td></tr>
		</table></center>
		</form>
		<br><br><br><br><br>	
	</div><!--close site_content-->  	
  
    <footer>
	<center><font face=tahoma size=3>&copy 2016-17 mmit institute.</center>  
    </footer> 
  
  </div><!--close main-->
  
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</body>
</html>