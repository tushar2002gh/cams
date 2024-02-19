<?php
session_start();
error_reporting(0);
include('include/config.php');



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin | Appointment History</title>
		<style>
body {
  background-image: url('images/add.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
table{
	border-collapse:collapse;
	width:100%;
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

.shadowbox {
  width: 80%;
  border: 1px solid #333;
  box-shadow: 8px 8px 5px #444;
  background-size: cover;
  background-attachment: fixed;
  background-size: cover;
  background-image: linear-gradient(180deg, #fff, #ddd 40%, #ccc);
}
</style>
</head>    
<body>	
<center><h1 style="font-size: 50px;"aling="center">Clinic Appointment System</h1></center>

			<button><a href="home1.html">Back to Home</a></button>
			
			
			<button><a href="about">About</a></button>
	
			
				
				<br>
				<h1>Table of book Appointment below</h1>
				<center>
									
									<div class="shadowbox">	
									<table border=1px>
										<thead>
											<tr>
												<th aling="center">sr.no</th>
												<th>id</th>
												<th> Fullnmae</th>
												<th>Address</th>
												<th>Gender</th>
												<th> Email</th>
												<th> contact_no</th>
												<th>Doctor name </th>
												
												<th>Date</th>
												
												<th>Time</th>
												
											</tr>
										</thead>
										<tbody>
                                        
                                        
 <?php                                       
$sql=mysqli_query($con,"SELECT * FROM `users` WHERE 1");
$cont=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td><?php echo $cont?></td>
												<td ><?php echo $row['id'];?></td>
												<td><?php echo $row['fullname'];?></td>
												<td><?php echo $row['address'];?></td>
												<td><?php echo $row['gender'];?> </td>
												
												<td><?php echo $row['Email'];?></td>
                                                <td><?php echo $row['contact_no'];?></td>
                                                <td><?php echo $row['Doctor'];?></td>
												<td><?php echo $row['Date'];?></td>
                                                <td><?php echo $row['Time'];?></td>
									
											</tr><?php $cont=$cont+1;
}
?>

										</tbody>

</table>
</div>
</center>
	</body>
</html>
