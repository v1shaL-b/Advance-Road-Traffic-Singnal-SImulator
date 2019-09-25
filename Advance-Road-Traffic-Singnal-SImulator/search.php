<?php
session_start();
if (!isset($_SESSION['username'])) {
header('Location: admini.php');
}
?>

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
          <li><a href="addque.php">Vehicle Register</a></li>
          <li><a href="complnt.php">Complaint Register</a></li>
          <li><a href="compstat.php">Complaint Status</a></li>
		  <li class="current"><a href="#">Search</a></li>
          <li><a href="logout.php"><img src="lout.png" alt="Logout" height=30 width=30></a></li>
        </ul>
      </div><!--close menubar-->	
    </nav>	

	  <?php $msg="";
	  if(isset($_POST['login']))
			{
				$rid=$_POST['rid'];
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
				$sql = "SELECT * FROM register where rid=$rid";
				if($result = $conn->query($sql))
				{
					if ($result->num_rows > 0) {
					// output data of each row
							while($row = $result->fetch_assoc()) {
								echo"<center><table border=1 bgcolor=white height=500 width=940 cellpadding=10 cellspacing=0>
								<tr><td colspan=4><center><br><h1><font face=tahoma size=5 color=blue><b> $row[oname]</b></font><br></hr></center></td></tr>
								  <tr><td colspan=4><center><img src=$row[img] alt='Girl in a jacket' width='180' height='150'></center></td></tr>
								  <tr><td><center>Registration ID: </center></td><td><center><input type=text value=$row[rid] size=30 required></center></td><td><center>Registration Date:</center></td><td><center><input type='text' value=$row[rdate] size=20></center></td></tr>
								  <tr><td><center>Owners Name: </center></td><td colspan=3><center><input type='text' value=$row[oname] size=60></center></td></tr>
								  <tr><td><center>Owners Address: </center></td><td colspan=3><center><input type='text' value=$row[oaddr] size=60></center></td></tr>
								  <tr><td><center>Mobile No: </center></td><td><center><input type='text' value=$row[mono] size=15></center></td><td><center>PIN Code :</center></td><td><center><input type='text' value=$row[pin] size=10></center></td></tr>
								  <tr><td><center>Vehicle Type:</center></td><td> <center><input type='text' value=$row[vtype] size=40></center></td>
								  <td><center>Chessis No: </center></td><td colspan=3><center><input type='text' value=$row[chesis] size=30></center></td></tr>
								  <tr><td><center>Colour: </center></td><td><center><input type='text' value=$row[color] size=20></center></td><td><center>Fuel :</center></td><td><center><input type='text' value=$row[fuel] size=20></center></td></tr>
								  <tr><td><center>Hourse Power: </center></td><td><center><input type='text' value=$row[hpower] size=20></center></td><td><center>Owner Number :</center></td><td><center><input type='text' value=$row[ono] size=20></center></td></tr>
								  <tr><td><center>Vehicle Name: </center></td><td><center><input type='text' value=$row[vname] size=20></center></td><td><center>Vehicle Maker :</center></td><td><center><input type='text' value=$row[vmaker] size=20></center></td></tr>
								  </table></center><br><br><br><br><br>";
							}
					}
					else{ $msg='Record not found ......';}
				}
				else
				{
					echo "Record not found .....";
				}
			
			mysqli_close($conn);	
			}
	?>
	<div id="site_content">		
		<br><br><br><br><br>
	  <form method="post" action="">
		<center><h1><font face=tahoma size=3px color=red><i><?php echo $msg; ?></i></h1></center>
		<center><table background='play.jpg' width=220 height=240 style='border-radius:  10px 10px 10px 10px'>
		<tr><td><center><h1>Searching</h1></center></td></tr>
		<tr><td><center><input type="text" name="rid" placeholder="Vehicle ID" class="nil" required="required"></center></td></tr>
		<tr><td colspan=2><center><button type="submit" name='login' class="but1">Search</button><br><br></center></td></tr>
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
<style>
.but1 {
     background-color: green; 
    border: none;
    color: white;
    padding: 6px;
    text-align: center;
	border-radius: 5px;
    font-size: 12px;
	width: 20%;
}
.but1:hover{
	background-color: grey;
}

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
.nil { 
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