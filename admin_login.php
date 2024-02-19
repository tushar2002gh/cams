

  

<!DOCTYPE html>
<html>

<head>
    <title>Admin-Login</title>
    <style>
    body {
              background-image: url('images/add.jpg');
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
            }
            .button{
                border:none;
                color:blue;
                padding: 15px 32px;
                display:inline-bock;
                font: size 16px;
                margin: 4px 2px;
                cursor:pointer;
            }
            .but1{background-color:  rgb(42, 42, 211);}
            .but2{background-color:red}
            </style>

</head>

<body >
		
					<center><header style="font-size: 50px;">Clinic Appointment System</header></center>
				
				
				<br>
					
						
                        <button><a href="index.php"> Home </a></button>
						<button><a href="saerch-bg">contact</a></button>
						<button><a href="help.html">Help</a></button>		
                        <button><a href="about">About</a></button>
                        
						

    <h2>Admin Login</h2>
	<form action="valid.php" method="POST">
    <center>
        
        <p color="red">
            Please enter your name and password to log in.<br />
            
        </p>

        
        UserName: <input type="text" name="aname" placeholder="Username">
            <br>
            <br>
        Password: <input type="password" name="apass" placeholder="Password">

        <br>
            <br>

        <button type="submit" name="submit">
            Login
        </button>
        <a href="passupdate.html">Forgot Password?</a>

        

  
    </form>
    
  
</body>


</html>

