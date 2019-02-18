
        <?php session_start();
        include 'header.php';
           if ($_SESSION['loginTF'] === true)
           {
                echo "Hello, {$_COOKIE['UserEmail']}";
                echo "<a href='DisplayAllSingles.php'>Display Singles</a>";
           }
           else
           {
               echo "User information is invalid";
               echo "<a href='Login.php'>Click Here to Login</a>";
           }    
                
                
              include "footer.php"; 
              
    
?>