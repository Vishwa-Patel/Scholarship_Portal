<html>
<head>
	<title> Scholarship Details </title>
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<style>
		.dropdown {
		background:linear-gradient(to bottom, #ffffff 37%, #cccccc 100%);
		position: relative;
		//display: inline-block;
		width:150px;
		height:30px;
		font-size: 15px;
		
		}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover{
	background: linear-gradient(to top, #ffffff 37%, #cccccc 100%);
	//display: block;
}

.sub
{
    border: none;
    outline: none;
    height: 40px;
    background: linear-gradient(to bottom, #ffffff 37%, #cccccc 100%);
    color: black;
    font-size: 15px;
    border-radius: 50px;
}
.sub:hover{
	background: linear-gradient(to top, #ffffff 37%, #cccccc 100%);
}

.tab{
	background:#f2f2f2;
	font-size:18px;
	font-family:Times New Roman;
}
	
</style>
</head>

<body>

<form method="post" action="main.php">
	<div>
	
	<img src="238402.png" height="100" width="300">
	<ul>
		<li><a href="Register.html">REGISTER</a><li>
		
		<li><a href="Aboutus.html">ABOUT US</a></li>
	</ul>

	<center><h2 style="font-family:Comic Sans Ms"> Welcome to Scholarship Portal ...!!!</h2></center>	
	</div>
	<h3 style="font-family:Comic Sans Ms">Choose According to your need ...!!! But Please Press Submit.....</h3></br>
	<div>
        <center>
         &nbsp;&nbsp;
		 <label for="State" style="color:black;font-size:18px">State</label>
            
				<select id="state" name="state" required="" class="dropdown">
                    <option value="State" select>State</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Rajasthan">Rajasthan</option>
					<option value="Maharashtra">Maharashtra</option>
					<option value="England">England</option>
					<option value="Poland">Poland</option>
					<option value="West England">West England</option>
                </select>&nbsp;&nbsp;
         <label for="category" style="color:black;font-size:18px">Category</label>
            
                <select id="cat" name="cat" required="" class="dropdown">
                    <option value="Category" select>Category</option>
                    <option value="National">National</option>
                    <option value="International">International</option>
                     </select>&nbsp;&nbsp;
           
        <label for="qualification" style="color:black;font-size:18px">Qualification </label>
            
				<select id="qual" name="qual" required="" class="dropdown">
                    <option value="Qualification" select>Qualification</option>
                    <option value="B.E">BE</option>
                    <option value="M.Sc">M.Sc</option>
					<option value="Ph.D">Ph.D</option>
					<option value="M.Phil">M.Phil</option>
					<option value="Higher Secondary School">Higher Secondary School</option>
                </select>&nbsp;&nbsp;
        <label for="gender" style="color:black;font-size:18px">Gender </label>
		
                <select id="gender" name="gender" required="" class="dropdown">
                    <option value="Gender" select>Gender</option>
					<option value="Male">Male</option>
                    <option value="Female">Female</option>
					<option value="Both">Both</option>
                </select>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="submit" name="submit" state="submit" class="sub">Submit</button>
            
     </center>
    </div>
	<br><br>
	<table width="100%" border="1" class="tab">

	<tr cellspacing="10" valign="middle">
		<th>No</th>
		<th>Scholarship Name</th>
		<th>Affiliated State</th>
		<th>Category</th>
		<th>Merit</th>
		<th>Qualification</th>
		<th>Gender</th>

	</tr>

<?php
        $errors = array();
        $db = mysqli_connect('localhost', 'root', '', 'scholarship');
		
		if(isset($_POST['submit']))
		{
			$state = mysqli_real_escape_string($db, $_POST['state']);
			$cat = mysqli_real_escape_string($db, $_POST['cat']);
			$qual = mysqli_real_escape_string($db, $_POST['qual']);
			$gender = mysqli_real_escape_string($db, $_POST['gender']);

			//if there is  no error then...;
			if($state=='State' && $qual=='Qualification' && $cat=='Category' && $gender=='Gender'){
			$sql02 = "SELECT * FROM `scholarships`";
            
            $result02 = $db->query($sql02);
            
				if ($result02->num_rows > 0) {
                // output data of each row
                while($row02 = $result02->fetch_assoc()) {
                    echo "<tr><td>".$row02["No"]."</td><td>".$row02["Name"]."</td><td>".$row02["State"]."</td><td>".$row02["Category"]."</td><td>".$row02["Merit"]."</td><td>".$row02["Qualification"]."</td><td>".$row02["Gender"]."</td></tr>";
					}
				}
			}
			else if($state!='State' && $cat!='Category' && $qual!='Qualification' && $gender!='Gender')
			{
			$sql0 = "SELECT * FROM `scholarships` WHERE State='$state' AND Category='$cat' AND Gender='$gender' AND Qualification='$qual' ";
            
            $result0 = $db->query($sql0);
            if ($result0->num_rows > 0) {
                // output data of each row
                while($row0 = $result0->fetch_assoc()) {
                    echo "<tr><td>".$row0["No"]."</td><td>".$row0["Name"]."</td><td>".$row0["State"]."</td><td>".$row0["Category"]."</td><td>".$row0["Merit"]."</td><td>".$row0["Qualification"]."</td><td>".$row0["Gender"]."</td></tr>";
					}
				}
			}
								
            else if($state!='State'&& $qual!='Qualification'&&$cat!='Category')
			{
			$sql = "SELECT * FROM `scholarships` WHERE State='$state' AND Category='$cat' AND Qualification='$qual'";
            
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["No"]."</td><td>".$row["Name"]."</td><td>".$row["State"]."</td><td>".$row["Category"]."</td><td>".$row["Merit"]."</td><td>".$row["Qualification"]."</td><td>".$row["Gender"]."</td></tr>";
					}
				}
			}
			
			else if($state!='State' && $cat!='Category' && $qual!='Qualification' && $gender=='Gender')
			{
			$sql0 = "SELECT * FROM `scholarships` WHERE State='$state' AND Category='$cat' AND Gender='$gender' ";
            
            $result0 = $db->query($sql0);
            if ($result0->num_rows > 0) {
                // output data of each row
                while($row0 = $result0->fetch_assoc()) {
                    echo "<tr><td>".$row0["No"]."</td><td>".$row0["Name"]."</td><td>".$row0["State"]."</td><td>".$row0["Category"]."</td><td>".$row0["Merit"]."</td><td>".$row0["Qualification"]."</td><td>".$row0["Gender"]."</td></tr>";
					}
				}
			}
			
			else if($state!='State' && $cat!='Category' && $qual=='Qualification' && $gender=='Gender')
			{
			$sql0 = "SELECT * FROM `scholarships` WHERE State='$state' AND Category='$cat'";
            
            $result0 = $db->query($sql0);
            if ($result0->num_rows > 0) {
                // output data of each row
                while($row0 = $result0->fetch_assoc()) {
                    echo "<tr><td>".$row0["No"]."</td><td>".$row0["Name"]."</td><td>".$row0["State"]."</td><td>".$row0["Category"]."</td><td>".$row0["Merit"]."</td><td>".$row0["Qualification"]."</td><td>".$row0["Gender"]."</td></tr>";
					}
				}
			}
			
			else if($state!='State' && $cat=='Category' && $qual!='Qualification' && $gender=='Gender')
			{
			$sql0 = "SELECT * FROM `scholarships` WHERE State='$state' AND Qualification='$qual'";
            
            $result0 = $db->query($sql0);
            if ($result0->num_rows > 0) {
                // output data of each row
                while($row0 = $result0->fetch_assoc()) {
                    echo "<tr><td>".$row0["No"]."</td><td>".$row0["Name"]."</td><td>".$row0["State"]."</td><td>".$row0["Category"]."</td><td>".$row0["Merit"]."</td><td>".$row0["Qualification"]."</td><td>".$row0["Gender"]."</td></tr>";
					}
				}
			}
			
			else if($state!='State' && $cat=='Category' && $qual=='Qualification' && $gender!='Gender')
			{
			$sql0 = "SELECT * FROM `scholarships` WHERE State='$state' AND Gender='$gender'";
            
            $result0 = $db->query($sql0);
            if ($result0->num_rows > 0) {
                // output data of each row
                while($row0 = $result0->fetch_assoc()) {
                    echo "<tr><td>".$row0["No"]."</td><td>".$row0["Name"]."</td><td>".$row0["State"]."</td><td>".$row0["Category"]."</td><td>".$row0["Merit"]."</td><td>".$row0["Qualification"]."</td><td>".$row0["Gender"]."</td></tr>";
					}
				}
			}
			
			else if($state=='State' && $cat!='Category' && $qual!='Qualification' && $gender=='Gender')
			{
			$sql0 = "SELECT * FROM `scholarships` WHERE Category='$cat' AND Qualification='$qual'";
            
            $result0 = $db->query($sql0);
            if ($result0->num_rows > 0) {
                // output data of each row
                while($row0 = $result0->fetch_assoc()) {
                    echo "<tr><td>".$row0["No"]."</td><td>".$row0["Name"]."</td><td>".$row0["State"]."</td><td>".$row0["Category"]."</td><td>".$row0["Merit"]."</td><td>".$row0["Qualification"]."</td><td>".$row0["Gender"]."</td></tr>";
					}
				}
			}
			
			else if($state=='State' && $cat!='Category' && $qual=='Qualification' && $gender!='Gender')
			{
			$sql0 = "SELECT * FROM `scholarships` WHERE Category='$cat' AND Gender='$gender'";
            
            $result0 = $db->query($sql0);
            if ($result0->num_rows > 0) {
                // output data of each row
                while($row0 = $result0->fetch_assoc()) {
                    echo "<tr><td>".$row0["No"]."</td><td>".$row0["Name"]."</td><td>".$row0["State"]."</td><td>".$row0["Category"]."</td><td>".$row0["Merit"]."</td><td>".$row0["Qualification"]."</td><td>".$row0["Gender"]."</td></tr>";
					}
				}
			}
			
			else if($qual!='Qualification'&&$gender!='Gender')
			{
			$sql0 = "SELECT * FROM `scholarships` WHERE Gender='$gender' AND Qualification='$qual'";
            
            $result0 = $db->query($sql0);
            if ($result0->num_rows > 0) {
                // output data of each row
                while($row0 = $result0->fetch_assoc()) {
                    echo "<tr><td>".$row0["No"]."</td><td>".$row0["Name"]."</td><td>".$row0["State"]."</td><td>".$row0["Category"]."</td><td>".$row0["Merit"]."</td><td>".$row0["Qualification"]."</td><td>".$row0["Gender"]."</td></tr>";
					}
				}
			}
			
			else if($state!='State')
			{			
			$sql1 = "SELECT * FROM `scholarships` WHERE State='$state'";
            
            $result1 = $db->query($sql1);
            if ($result1->num_rows > 0) {
                
                while($row1 = $result1->fetch_assoc()) {
                    echo "<tr><td>".$row1["No"]."</td><td>".$row1["Name"]."</td><td>".$row1["State"]."</td><td>".$row1["Category"]."</td><td>".$row1["Merit"]."</td><td>".$row1["Qualification"]."</td><td>".$row1["Gender"]."</td></tr>";
					}
				} 
			}
			
			else if($cat!='Category')
			{
			$sql1 = "SELECT * FROM `scholarships` WHERE Category='$cat'";
            
            $result1 = $db->query($sql1);
            if ($result1->num_rows > 0) {
                
                while($row1 = $result1->fetch_assoc()) {
                    echo "<tr><td>".$row1["No"]."</td><td>".$row1["Name"]."</td><td>".$row1["State"]."</td><td>".$row1["Category"]."</td><td>".$row1["Merit"]."</td><td>".$row1["Qualification"]."</td><td>".$row1["Gender"]."</td></tr>";
                }
            } 
			}
			else if($qual!='Qualification')
			{
			$sql2 = "SELECT * FROM `scholarships` WHERE Qualification='$qual'";
            
            $result2 = $db->query($sql2);
            if ($result2->num_rows > 0) {
                    while($row2 = $result2->fetch_assoc()) {
                    echo "<tr><td>".$row2["No"]."</td><td>".$row2["Name"]."</td><td>".$row2["State"]."</td><td>".$row2["Category"]."</td><td>".$row2["Merit"]."</td><td>".$row2["Qualification"]."</td><td>".$row2["Gender"]."</td></tr>";
					}
				} 
			}
			else if($gender!='Gender')
			{					
			$sql3 = "SELECT * FROM `scholarships` WHERE Gender='$gender'";
            
            $result3 = $db->query($sql3);
            if ($result3->num_rows > 0) {
                    while($row3 = $result3->fetch_assoc()) {
                    echo "<tr><td>".$row3["No"]."</td><td>".$row3["Name"]."</td><td>".$row3["State"]."</td><td>".$row3["Category"]."</td><td>".$row3["Merit"]."</td><td>".$row3["Qualification"]."</td><td>".$row3["Gender"]."</td></tr>";
                }
            } 
			}
			
	}	
		
?>
</table>

</form>
</body>
</html>