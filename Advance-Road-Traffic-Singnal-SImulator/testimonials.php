<?php  
	$msg="";
	session_start();
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
	
	if(isset($_POST['login']))
	{		
				$rid=$_POST['username']; $pass=$_POST['password'];
				$sql = "SELECT * FROM register where rid=$rid && pass=$pass";
				if($result = $conn->query($sql))
				{
					$row = $result->fetch_assoc(); 
				}
				if($rid==$row['rid']&&$pass==$row['pass'])
				{
				    $_SESSION['rid'] = '1';
					header("Location:profile.php?rid=$rid");
				}
				else 
				{
					$msg = "Wrong username or password";
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
</style>
<!DOCTYPE html> 
<html>

<head>
  <title>RTO Online</title>
 <link rel="icon" href="rto1.png" type="image/png">
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
          <li><a href="index.php">Home</a></li>
          <li><a href="admini.php">Admin Login</a></li>
		  <li class="current"><a href="#">User Login</a></li>
          <li><a href="projects.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div><!--close menubar-->	
    </nav>	
    
	<div id="site_content">		
		<br><br><br><br><br>
	  <form method="post" action="">
		<center><h1><font face=tahoma size=3px color=red><i><?php echo $msg; ?></i></h1></center>
		<center><table background='play.jpg' width=220 height=240 style='border-radius:  10px 10px 10px 10px'>
		<tr><td><center><h1>User Login</h1></center></td></tr>
		<tr><td><center><input type="text" name="username" placeholder="Username" required="required"></center></td></tr>
		<tr><td><center><input type="password" name="password" placeholder="Password" required="required"></center></td></tr>
		<tr><td colspan=2><center><button type="submit" name='login' class="but1">Login</button><br><br></center></td></tr>
		</table></center>
		</form>
		<br><br><br><br><br>	
	</div><!--close site_content-->  	
  
    <footer>
	<center><font face=tahoma size=3>&copy 2017-18 mmit institute pvt.ltd.</center>  
    </footer> 
  
  </div><!--close main-->
  
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</body>
</html>