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
	$pass=mt_rand(1000, 9999);
	$rid=$_POST['rid']; 	$rdate=$_POST['rdate'];
	$oname=$_POST['oname'];	$oaddr=$_POST['oaddr'];
	$mono=$_POST['mono'];	$pin=$_POST['pin'];
	$vtype=$_POST['vtype'];	$chsisno=$_POST['chsisno'];
	$color=$_POST['color'];	$fuel=$_POST['fuel'];
	$hpow=$_POST['hpow'];	$nowner=$_POST['nowner'];
	$vname=$_POST['vname']; $vmake=$_POST['vmake'];

					$sql = "insert into register(rid,pass,rdate,oname,oaddr,mono,pin,vtype,chesis,color,fuel,hpower,ono,vname,vmaker) values('$rid','$pass','$rdate','$oname','$oaddr','$mono','$pin','$vtype','$chsisno','$color','$fuel','$hpow','$nowner','$vname','$vmake')";
					if(mysqli_query($conn, $sql))
					{
						$msg = "Questions Loaded successfully ............";
					}
					else{
							$msg = "Account already Created". mysqli_error($conn);
						}	
	
	$ch = curl_init();
	$user="nily0529@gmail.com:112233";
	$receipientno=$mono; 
	$senderID="TEST SMS"; 
	$msgtxt="Welcome $oname . Your User ID : $rid and Password : $pass and Login Link is: http://localhost/mmitweb/testimonials.php"; 
	curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
	$buffer = curl_exec($ch);
	if(empty ($buffer))
	{ echo " buffer is empty "; }
	else
	{ header("Location: eg.php?user=$rid"); } 
	curl_close($ch); 
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
          <li class="current"><a href="#">Vehicle Register</a></li>
          <li><a href="complnt.php">Complaint Register</a></li>
          <li><a href="compstat.php">Complaint Status</a></li>
		  <li><a href="search.php">Search</a></li>
          <li><a href="logout.php"><img src="lout.png" alt="Logout" height=30 width=30></a></li>
        </ul>
      </div><!--close menubar-->	
    </nav>	
    
	<div id="site_content">			
	<br><br><br>
	  <form method="post" action="">
		<center><table border=1 bgcolor=white height=500 width=950 cellpadding=10 cellspacing=0>
		<tr><td colspan=4><center><br><h1><font face=tahoma size=5 color=blue><b>Vehicle Registration</b></font><br></h1></center></td></tr>
				  <tr><td><center>Registration ID: </center></td><td><center><input type=text name= 'rid' size=30 required></center></td><td><center>Registration Date:</center></td><td><center><input type="date" name="rdate" min="2000-01-02"></center></td></tr>
				  <tr><td><center>Owners Name: </center></td><td colspan=3><center><input type=text name= 'oname' size=60></center></td></tr>
				  <tr><td><center>Owners Address: </center></td><td colspan=3><center><textarea rows="3" cols="60" name="oaddr" ></textarea></center></td></tr>
				  <tr><td><center>Mobile No: </center></td><td><center><input type=text name= 'mono' size=10></center></td><td><center>PIN Code :</center></td><td><center><input type=text name= 'pin' size=10></center></td></tr>
				  <tr><td><center>Vehicle Type:</center></td><td> <center><select name='vtype' style='background-color: transparent; width:145;' required><option value=''></option><option value='mcycle'><center><center> M-Cycle/Scooter</option><option value='car'> Car </option><option value='truck'> Truck </option></select></center></td>
				  <td><center>Chessis No: </center></td><td colspan=3><center><input type=text name= 'chsisno' size=30></center></td></tr>
				  <tr><td><center>Colour: </center></td><td><center><input type=text name= 'color' size=10></center></td><td><center>Fuel :</center></td><td><center><input type=text name= 'fuel' size=10></center></td></tr>
				  <tr><td><center>Hourse Power: </center></td><td><center><input type=text name= 'hpow' size=10></center></td><td><center>Owner Number :</center></td><td><center><input type=text name= 'nowner' size=10></center></td></tr>
				  <tr><td><center>Vehicle Name: </center></td><td><center><input type=text name= 'vname' size=10></center></td><td><center>Vehicle Maker :</center></td><td><center><input type=text name= 'vmake' size=10></center></td></tr>
				  <tr><td colspan=4>.</td></tr>";   
				  <tr><td colspan=4><center><button type="submit" name='login' class="but1">Submit</button><br><br></center></td></tr>
		</table></center>
		</form>
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