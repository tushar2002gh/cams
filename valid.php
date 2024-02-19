<?php 
    $aname=$_POST["aname"];
    $apass=$_POST["apass"];
    if(isset($_POST['submit']))
    {
        if($aname=="admin")
        {
            if($apass==="admin@123")
            {
                header('Location:home1.html');
            }
            else
            {
                echo("<script>alert(' Enter currect passwoed');</script>");

            }
        }
        else{
            echo("<script>alert('Enter currect user name');</script>");

        }
    }
    ?>
    <html>
        <a href=admin_login.php> GO back</a>
</html>