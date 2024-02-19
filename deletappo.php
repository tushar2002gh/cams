<html>
	<head>
		<title>Delete Appointment</title>
	</head>
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
.but1{background-color:;}
.but2{background-color:red}
</style>
</head>    
<body>	
<center><h1 style="font-size: 50px;"aling="center">Clinic Appointment System</h1></center>

			<button><a href="home1.html">Back to Home</a></button>
			
			
			<button><a href="about">About</a></button>
            <br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include_once('include/config.php');
$id=$_POST['id'];
if(isset($_POST["delete"]))
			{
				
                $sql="DELETE FROM users WHERE id='$id'";
				$result=mysqli_query($con,$sql);
				if(!$result)
				{
					echo("Error in record deletion:".mysqli_error($con));
				}
				else
				{
					echo("Appointment Cancel successfully");
					?><a href="appointment_history.php">view delition</a><?php
				}
			}
			
		
		mysqli_close($con);
		?>
        </body>
        </html>