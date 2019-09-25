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
	      <h2><img src=rto1.png height=80 width=80> &nbsp<font face=tahoma size=6><b>Advance Road Signal Tracking System</b></font></h2>
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
          <li><a href="search.php">Search</a></li>
          <li><a href="logout.php"><img src="lout.png" alt="Logout" height=30 width=30></a></li>
        </ul>
      </div><!--close menubar-->	
    </nav>	
    
	<div id="site_content">		

      <div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="940" height="300" src="images/rto.png" alt="<center>MMIT Campus</center>" /></li>
          <li><img width="940" height="300" src="images/back4.jpg" alt="<center>MMIT Campus</center>" /></li>
        </ul> 
	  </div><!--close slideshow-->	
	
	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2> Technical Keywords</h2>
            <p> Languages : <br/>
                &nbsp &nbsp 1. Php , Java Script <br/>
                &nbsp &nbsp 2. CSS , HTML<br/>
                &nbsp &nbsp 3. HTML 5 , Anguler JS <br/><br/>
                Database : <br/>
                &nbsp &nbsp 1. Mysql Database</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Goals Of Project</h2>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		
		<div class="sidebar">
          <div class="sidebar_item">
            <p>To automated vehicles signal breaking detection and ﬁnd out stolen vehicles also to automated toll ticketing system.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <p>Gmail : <a href="mailto:info@youremail.co.uk">www.rto@gmail.com</a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
	  <div id="content">
        <div class="content_item">
		  <h1><font face=times new roman color=skyblue>ARST System </font></h1> 
          <p>A development of an Advanced Road Signal Tracking (ARST) System needed because present signal system used web cams and it requires human intervention. These systems have limitation because they will use the human resource hence the chance of failure is occurred. The present road signal system does not provide an automation to the system it requires human resource. the ARST system consist an Arduino-Uno, ESP-8086 WiFi,Ov7670 Camera,IR sensors and Php which provide detection and automation to the system. The ARST system will able to deal with two basic problem of traditional road signal system: i)Automatic detection of signal breaking vehicles. ii) Searching for stolen vehicles.</p>   				  
		  <div class="content_imagetext">
		    <div class="content_image">
		      <img src="rto11.jpg" width=650 height=230/>
	        </div><br/>
		    <p><font face=tahoma color=red size=2><b>RFID Based Signal Tracking System</b></p>
		  </div><!--close content_imagetext-->		  
		  
          			  
		</div><!--close content_item-->
      </div><!--close content-->   
	
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