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
.shadowbox {
  width: 25%;
  height:20%;
  border: 1px solid #333;
  box-shadow: 8px 8px 5px #444;
  padding: 8px 12px;
  background-image: linear-gradient(180deg, #fff, #ddd 40%, #ccc);
}
</style>
</head>    
<body>	
<center><h1 style="font-size: 50px;"aling="center">Clinic Appointment System</h1></center>

			<button><a href="home1.html">Back to Home</a></button>
			
			
			<button><a href="about">About</a></button>
			<br><br><br><br><br><br><br>
	<center>
		<div class="shadowbox">
				
				<b>Enter a patiant id here for Cancal Appointment</b>
	
	<br><br>
		<form method="POST" action="deletappo.php">
		patient Id:<input type="text"name="id"value=""/></br>
                <input type="submit"name="delete"value="Cancel appointment"/></br>
               
                </form>
</div>
</center>
	</body>
<html>


