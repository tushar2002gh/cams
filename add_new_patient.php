<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{

$id=$_POST['id'];
$fname=$_POST['full_name'];
$address=$_POST['address'];

$gender=$_POST['gender'];
$Email=$_POST['email'];
$conno=$_POST['phone_no'];
$doctor=$_POST['doctor'];
$date=$_POST['date'];
$time=$_POST['time'];
$con = mysqli_connect("localhost", "root", "", "cams");
$query=mysqli_query($con,"insert into users(id,fullname,address,gender,Email,contact_no,Doctor,Date,Time) values('$id','$fname','$address','$gender','$Email','$conno','$doctor','$date','$time')");
if($query)
{
	echo "<script>alert(' Appointment Successfully');</script>";
}
}
?>


<!DOCTYPE html>
<html >

	<head>
		<title>User Registration</title>
		<style>
body {
  background-image: url('images/add.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.button{
	border:none;
	
	padding: 15px 32px;
	display:inline-bock;
	font: size 16px;
	margin: 4px 2px;
	cursor:pointer;
}
.but1{background-color:solid #333}
.but2{background-color:solid #333}
.shadowbox {
  width: 15em;
  border: 1px solid #333;
  box-shadow: 8px 8px 5px #444;
  padding: 8px 12px;
  background-image: linear-gradient(180deg, #fff, #ddd 40%, #ccc);
}
</style>
	
	</head>


	<body >
		
		<a href="index.php" style="font-size: 50px;">Clinic Appointment System</a>
	
	
	<br>
		
			<button class="but1"><a href="home1.html">Back to Home</a></button>
			
			
			

					<form name="registration"   method="POST">
						<br>
						<br>

							<b>
								Add new Appointment 
</b>
<center>
							<div class="shadowbox" >
							<p>
								Enter patient details below:
							</p>
								Id:<input type="int" name="id" palaceholder="id">
							     <br><br>
								Name:<input type="text"  name="full_name" placeholder="Full Name" required>
							     <br><br>
								Address: <input type="textarea"  name="address" placeholder="Address" required><br>
								<label ><br>
									Gender:
								</label>
									<input type="radio"  name="gender" value="female" >
									<label >
										Female
									</label>
									<input type="radio"  name="gender" value="male">
									<label>
										Male
									</label><br><br>
									Age :<input type="int"name="age"value="" placeholder="Enter age "><br><br>
									
									Email id:<input type="email"name="email"placeholder="Enter Email id here "><br><br>
									contact no:<input type="int" name="phone_no" placeholder="Enter phone .No here"><br><br>
									Doctors:<select name="doctor"  required="required"><br>
												<option value="dr. abc">Dr.Nitin Mhaske </option>
												<option value="dr. xyz">Dr.xyz </option>
												<option value="dr. kln">Dr. kln </option>
												<option value="dr. pqr">Dr. pqr </option>
												<option value="dr. ">Dr. </option>
											</select><br><br>
															
									Date: <input type="date" data-date-format="yyyy-mm-dd" name="date"><br><br>
									time : <input  type="time"name="time"  required="required"><br><br>
														</div>														
														
								<button  class="but1" type="submit"  name="submit">
									Submit 
								</button>
								<button  class="but2" type="reset" name="cancel">	
								cancel
								</button>

							
						
					</form>

</div>	
</center>	
		
	</body>
	<!-- end: BODY -->
</html>