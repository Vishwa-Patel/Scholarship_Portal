<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
<script>
	function validation(){
	var username=document.getElementById('uname').value;
	var pass=document.getElementById('pass').value;
	
	if(username=="")
	{
		document.getElementById('uname').innerHTML="username is required";
		alert("Please Enter the user Name..");
		return false;
	}
	if(pass=="")
	{
		document.getElementById('uname').innerHTML="Password is required";
		alert("Please Enter the Password...");
		return false;
		}
	
}
</script>
		
    <body>
    <div class="login-box">
    <img src="th.jfif" class="avatar">
        <h1>Login Here</h1>
            <form action="retrivelog.php" method="POST" onsubmit="return validation()" >
            <p>Email</p>
            <input type="text" name="username" placeholder="Enter Email" id="uname" required>
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password" id="pass" required>
            <input type="submit" name="submit" value="Login" >
            </br></br>
			<a href="Register.html" style="font-size:18px">Register Here !!!</a> </br></br>
			
            </form>
                
        </div>
    
    </body>
</html>