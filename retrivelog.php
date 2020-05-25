<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>

<?php
	
	$connect=mysqli_connect('localhost','root','','scholarship');
	$result=mysqli_select_db($connect,'scholarship') or die("error");
	if(!mysqli_select_db($connect,'scholarship'))
	{
		echo "Database not Selected...";
	}
	
	$user = $_POST['username'];
	$password = $_POST['pass'];
	
	$sql="SELECT `email`,`password` FROM `userdetail` WHERE `email`= '$user' AND `password`= '$password'";
	
	$rs=mysqli_query($connect,$sql);
	
	$result = mysqli_fetch_array($rs); 
	$num_row = mysqli_num_rows($rs);
	if( $num_row ==1 )
    {
		header("refresh:0.5; url=main.php");
		echo 'hi there';
		exit;
	}
	else
    {
		echo '<font style="color:white; font-size:"25px">Username and Password are incorrect....</font>';
    }
	
	mysqli_close($connect);	
	
?>
</html>