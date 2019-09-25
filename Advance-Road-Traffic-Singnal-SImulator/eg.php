<?php
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));   
// Check if file already exists
if (file_exists($target_file)) {
    $msg= "Sorry, file already exists."; }
// Check file size
else if ($_FILES["fileToUpload"]["size"] > 5000000) {
    $msg= "Sorry, your file is too large.";	}
// Allow certain file formats
else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $msg= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";	}
// Check if $uploadOk is set to 0 by an error
 else {
		$img=$_FILES["fileToUpload"]["name"];
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        $msg= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
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
			echo $user=$_GET['user'];
			$sql = "update register SET img='$img' WHERE rid='$user'";
						if(mysqli_query($conn, $sql))
						{
							$msg = "Profile Pic uploaded successfully ............";
						}
	}
}
?>

<!DOCTYPE html>
<html>
<body bgcolor=black>
<form action="" method="post" enctype="multipart/form-data">
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <?php echo"<center><font color=red size=3><i> $msg </i></font></center>"; ?><br/>
	<center><font color=blue size=5><b> Select Image To Upload: </b></font> &nbps
    <font color=blue size=5><input type="file" name="fileToUpload" id="fileToUpload"></font>
    <font color=red size=5><input type="submit" value="Upload Image" name="submit"></font></center>
</form>
</body>
</html>