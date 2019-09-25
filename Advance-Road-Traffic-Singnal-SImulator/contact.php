<?php
	if(isset($_POST['sub']))
	{
		header('location:index.php');
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
          <li><a href="admini.php">Admin Login</a></li>
		  <li><a href="testimonials.php">User Login</a></li>
          <li><a href="projects.php">About Us</a></li>
          <li class="current"><a href="#">Contact Us</a></li>
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

	  <center>
        <div class="content_item">
		  <div class="form_settings">
			<h1><font color=grey>.</font></h1>
            <h2><font color=skyblue face=times new roman >Contact Us</font></h2>
            <p style="padding-bottom: 15px;">Survey No. 35, Plot No. 5/6, Vadgaon Shinde Road, Lohgaon, Pune, Maharashtra 411047</p>           
			<p><span>Name :</span><input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email Address :</span><input class="contact" type="text" name="your_email" value="" /></p>
			<p><span>Message :</span><textarea class="contact textarea" rows="8" cols="50" name="your_message"></textarea></p>
            <p style="padding: 10px 0 10px 0;">Please enter the answer to this simple maths question (to prevent spam)</p>
			<p><span>Maths Question: 9 + 3 = ?</span><input type="text" name="user_answer" class="contact" /><input type="hidden" name="answer" value="4d76fe9775" /></p>
            <form action="" method="POST">
			<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="sub" /></p>
          </div><!--close form_settings-->
		</div><!--close content_item-->
      </center><!--close content-->   
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
