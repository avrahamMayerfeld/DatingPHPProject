
        <?php include 'header.php';
        $conn = new mysqli('127.0.0.1','root','password121201','singles');
        if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
} 
echo nl2br("\n ");
echo "Connected successfully";
  
$sql="SELECT email, gender,
            birthMonth, birthDD, birthYYYY, height, aboutU FROM userinfo";
$results=$conn->query($sql);



while ($row=$results->fetch_assoc())
{
echo '<br>      '.$row['email'] ;
echo '  '.$row['gender'];
echo "  ". $row['birthMonth'];
echo "  ". $row['birthDD'];
echo "  ". $row['birthYYYY'];
echo "  ". $row['height'];
echo "  ". $row['aboutU'];
}
    
 
      include 'footer.php';  ?>
   
