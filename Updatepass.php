<html>
	<head>
		<title>Update pass</title>
	</head>
	<body>
		<?php
        include_once('include/config.php');
        if(isset($_POST['forgetpass']))
        {
			   $id=$_POST['id'];
               $username=$_POST['username'];
               $npass=$_POST['npass'];
               if($id=1 && $username="admin")
               {
                $sql="update admin set npass='$npass' where id='$id'";
				$result=mysqli_query($con,$sql);
				if(!$result)
				{
					echo("Error in password updation:".mysqli_error($con));
				}
				else
				{?>
                    <script>
					        alert("password updated successfully");
                    </script>
                    <?php
				}

               }
				
            }
		mysqli_close($con);
		?>
		</body>
</html>