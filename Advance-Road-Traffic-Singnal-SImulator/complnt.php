<?php
session_start();
if (!isset($_SESSION['username'])) {
header('Location: admini.php');
}
?>

<?php
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
	$rid=$_POST['rid']; 	$rdate=$_POST['rdate'];
	$oname=$_POST['oname'];	$oaddr=$_POST['oaddr'];
	$mono=$_POST['mono'];	$pin=$_POST['pin'];
	$vtype=$_POST['vtype'];	$chsisno=$_POST['chsisno'];
	$color=$_POST['color'];	$fuel=$_POST['fuel'];
	$vname=$_POST['vname']; $vmake=$_POST['vmake'];

					$sql = "insert into complaint(rid,rdate,oname,oaddr,mono,pin,vtype,chesis,color,fuel,vname,vmake) values('$rid','$rdate','$oname','$oaddr','$mono','$pin','$vtype','$chsisno','$color','$fuel','$vname','$vmake')";
					if(mysqli_query($conn, $sql))
					{
						$msg = "Complaint Registre successfully ............";
					}
					else{
							$msg = "Account already Created". mysqli_error($conn);
						}	
	mysqli_close($conn);
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
          <li><a href="addque.php">Vehicle Register</a></li>
          <li class="current"><a href="#">Complaint Register</a></li>
          <li><a href="compstat.php">Complaint Status</a></li>
		  <li><a href="search.php">Search</a></li>
          <li><a href="logout.php"><img src="lout.png" alt="Logout" height=30 width=30></a></li>
        </ul>
      </div><!--close menubar-->	
    </nav>	
    
	<div id="site_content">			
	<br><br><br>
	  <form method="post" action="">
	      <?php $msg=""; echo"<center><font color=red size=3><i> $msg </i></font></center>"; ?><br/>
		<center><table border=1 bgcolor=white height=500 width=800 cellpadding=10 cellspacing=0>
		<tr><td colspan=4><center><br><h1><font face=tahoma size=5 color=blue><b>Complaint Registration</b></font><br></h1></center></td></tr>
				  <tr><td><center>Registration ID: </center></td><td><center><input type=text name= 'rid' size=30 required></center></td><td><center>Registration Date:</center></td><td><center><input type="date" name="rdate" min="2000-01-02"></center></td></tr>
				  <tr><td><center>Owners Name: </center></td><td colspan=3><center><input type=text name= 'oname' size=60></center></td></tr>
				  <tr><td><center>Owners Address: </center></td><td colspan=3><center><textarea rows="3" cols="60" name="oaddr" ></textarea></center></td></tr>
				  <tr><td><center>Mobile No: </center></td><td><center><input type=text name= 'mono' size=10></center></td><td><center>PIN Code :</center></td><td><center><input type=text name= 'pin' size=10></center></td></tr>
				  <tr><td><center>Vehicle Type:</center></td><td> <center><select name='vtype' style='background-color: transparent; width:145;' required><option value=''></option><option value='mcycle'><center><center> M-Cycle/Scooter</option><option value='car'> Car </option><option value='truck'> Truck </option></select></center></td>
				  <td><center>Chessis No: </center></td><td colspan=3><center><input type=text name= 'chsisno' size=30></center></td></tr>
				  <tr><td><center>Colour: </center></td><td><center><input type=text name= 'color' size=10></center></td><td><center>Fuel :</center></td><td><center><input type=text name= 'fuel' size=10></center></td></tr>
				  <tr><td><center>Vehicle Name: </center></td><td><center><input type=text name= 'vname' size=10></center></td><td><center>Vehicle Maker :</center></td><td><center><input type=text name= 'vmake' size=10></center></td></tr>
				  <tr><td colspan=4>.</td></tr>";   
				  <tr><td colspan=4><center><button type="submit" name='login' class="but1">Submit</button><br><br></center></td></tr>
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