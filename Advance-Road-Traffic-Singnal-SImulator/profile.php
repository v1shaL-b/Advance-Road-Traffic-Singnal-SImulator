<?php
session_start();
if (!isset($_SESSION['rid'])) {
header('Location: testimonials.php');
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
          <li class="current"><a href="index.php">Home</a></li>
          <li><a href="admini.php">Admin Login</a></li>
		  <li><a href="testimonials.php">User Login</a></li>
          <li><a href="projects.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="lout.php"><img src="lout.png" alt="Logout" height=30 width=30></a></li>
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
			$rid=$_GET['rid'];
			$sql = "SELECT * FROM register where rid=$rid";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
					while($row = $result->fetch_assoc()) {
						$bal=$row['balence'];
						echo "
						<center><table border=1 bgcolor=white height=500 width=950 cellpadding=10 cellspacing=0>
						<tr><td colspan=4><center><br><h1><font face=tahoma size=5 color=blue><b>Welcome $row[oname]</b></font><br></hr></center></td></tr>
						  <tr><td colspan=3><center><font size=5 color=green><b>Available Balance: Rs. $row[balence] /-</font></center>&nbsp&nbsp<a href='ourwork.php?rid=$rid'>ADD CASH</a><br><br><hr/><br>
						  <center><form method='post' action=''><font size=2 color=green>Enter Fine ID:   <input type='text' name='no' size=10 required> &nbsp &nbsp &nbsp &nbsp Enter Amount: <input type='text' name=amount size=10 required></b></font></center>
						  <br><center><button type='submit' name='login' class='but1'>Submit</button></form><br><br></center></td>
						  <td><center><img src=$row[img] alt='Girl in a jacket' width='180' height='150'></center></td></tr>
						  <tr><td><center>Registration ID: </center></td><td><center><input type=text value=$row[rid] size=30 required></center></td><td><center>Registration Date:</center></td><td><center><input type='text' value=$row[rdate] size=20></center></td></tr>
						  <tr><td><center>Owners Name: </center></td><td colspan=3><center><input type='text' value=$row[oname] size=60></center></td></tr>
						  <tr><td><center>Owners Address: </center></td><td colspan=3><center><input type='text' value=$row[oaddr] size=60></center></td></tr>
						  <tr><td><center>Mobile No: </center></td><td><center><input type='text' value=$row[mono] size=15></center></td><td><center>PIN Code :</center></td><td><center><input type='text' value=$row[pin] size=10></center></td></tr>
						  <tr><td><center>Vehicle Type:</center></td><td> <center><input type='text' value=$row[vtype] size=40></center></td>
						  <td><center>Chessis No: </center></td><td colspan=3><center><input type='text' value=$row[chesis] size=30></center></td></tr>
						  <tr><td><center>Colour: </center></td><td><center><input type='text' value=$row[color] size=20></center></td><td><center>Fuel :</center></td><td><center><input type='text' value=$row[fuel] size=20></center></td></tr>
						  <tr><td><center>Hourse Power: </center></td><td><center><input type='text' value=$row[hpower] size=20></center></td><td><center>Owner Number :</center></td><td><center><input type='text' value=$row[ono] size=20></center></td></tr>
						  <tr><td><center>Vehicle Name: </center></td><td><center><input type='text' value=$row[vname] size=20></center></td><td><center>Vehicle Maker :</center></td><td><center><input type='text' value=$row[vmaker] size=20></center></td></tr>
						  </table></center>";
					}
			}
			if(isset($_POST['login']))
			{
				$no=$_POST['no']; $amount=$_POST['amount'];
				$total=$bal-$amount;
				if($bal>=$amount)
				{
					$sql = "SELECT * FROM comp where no=$no";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						$row = $result->fetch_assoc(); 
					} 
							if($row['stat']!='Yes')
							{	echo $row['stat'];
								$sql = "update comp SET stat='Yes' WHERE no='$no'";
								mysqli_query($conn, $sql);
								$sql = "update register SET balence='$total' WHERE rid='$rid'";
								mysqli_query($conn, $sql);
								header("Location:profile.php?rid=$rid");
							}
				else
				{
					echo"<center><font size=3 color=red><i>Amount is allready payed ...</i></font></center>";
				}
				}
				else
				{
					echo"<center><font size=3 color=red><i>You havnt suficient balance or allready pay ...</i></font></center>";
				}
			}
					
					
				
			
		mysqli_close($conn);
	?>
		<br><br><br><br><br>	
	</div><!--close site_content-->  	
  
    <footer>
	<center><font face=tahoma size=3>&copy 2017-18 mmit institutepvt.ltd.</center>  
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
a:link {
    color: red;
}
a:visited {
    color: blue;
}
a:hover {
    color: hotpink;
}
</style>