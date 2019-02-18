<?php  
session_start();
include "header.php";

        $_SESSION['loginTF']=false;
        $cookieEmail = 'UserEmail';
      
        $conn = new mysqli('127.0.0.1','root','password121201','singles');
        $sql = 'SELECT email FROM login where email = "'.$_POST["email"].'" && password = "'.$_POST["password"].'"';
        $result = mysqli_query($conn, $sql);

        if(!($result->num_rows===0))
        {
           $_SESSION['loginTF'] = true;
           setcookie($cookieEmail,($_POST["email"]));
                
        }
        else
        {
            $_SESSION['loginTF'] = false;
                
        }
        
        mysqli_close($conn);
        echo "<a href='LoginContentPage.php'>Click Here to Login</a>";
       
        include "footer.php";         