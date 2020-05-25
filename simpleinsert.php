<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/stylesheet1.css">
</head>
<?php
	
	$connect=mysqli_connect("localhost","root","","scholarship");
	$result=mysqli_select_db($connect,'scholarship') or die("error");
	if(!mysqli_select_db($connect,'scholarship'))
	
	{
		echo "Database not Selected...";
	}
	
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$contact = $_POST['contactno'];
	$emailid = $_POST['email'];
	$password = $_POST['pass'];
	$gender = $_POST['gender'];

	$sql="INSERT INTO `userdetail`(`fname`,`lname`,`contactno`,`email`,`password`,`gender`) VALUES ('$firstname','$lastname','$contact','$emailid','$password','$gender')";
		
		if(!mysqli_query($connect,$sql))
		{
			die('Could not enter data: ' . mysqli_error($connect));
			echo "Not inserted...";
		}
		else
		{
			echo "Inserted...";
		}
		
		header("refresh:1; url=login.php");
	
?>
</html>