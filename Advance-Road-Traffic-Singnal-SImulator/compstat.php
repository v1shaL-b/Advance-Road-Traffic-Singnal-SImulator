<?php
session_start();
if (!isset($_SESSION['username'])) {
header('Location: admini.php');
}
?>

<!DOCTYPE html> 
<html>

<head>
  <title>MMIT Aptitude Test</title>
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
          <li><a href="addque.php">Vehicle Register</a></li>
          <li><a href="complnt.php">Complaint Register</a></li>
          <li class="current"><a href="#">Complaint Status</a></li>
		  <li><a href="search.php">Search</a></li>
          <li><a href="logout.php"><img src="lout.png" alt="Logout" height=30 width=30></a></li>
        </ul>
      </div><!--close menubar-->	
    </nav>	
    
	<div id="site_content">			
	<br><br><br>
	  <?php
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
		
			echo "<center><table border=1 bgcolor=white height=400 width=600 cellpadding=10 cellspacing=0>
				  <tr><center><td align='center'>Complaint ID</td><td align='center'>Vehicle NO.</td><td align='center'>Fine Pay/Not</td><td align='center'>Date</td><td align='center'>Time</td></center></tr>";
			$sql = "SELECT * FROM comp";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "
						<tr><center><td align='center'>$row[no]</td><td align='center'>$row[rid]</td><td align='center'>$row[stat]</td><td align='center'>$row[date]</td><td align='center'>$row[time]</td></center></tr>
						";
					}
			}
			echo"</table></center>";
		mysqli_close($conn);
	?>
		<br><br><br><br><br>	
	</div><!--close site_content-->  	
  
    <footer>
	<center><font face=tahoma size=3>&copy 2017-18 mmit institute.</center>  
    </footer> 
  
  </div><!--close main-->
  
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</body>
</html>