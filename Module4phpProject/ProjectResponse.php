<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'header.php';
 
print 'User Information: ';
echo nl2br("\n");
print'Email: ';

print($_POST["email"]);
echo nl2br("\n");
print'Password: ';
print($_POST["password"]);
echo nl2br(" \n");

print($_POST["gender"]);
echo nl2br("\n ");
print'Date of Birth: ';
print($_POST["birthmonths"]);
print(" ");
print($_POST["birthdates"]);
print(" ");
print($_POST["birthyears"]);

echo nl2br("\n ");
print('Height: ');
print($_POST["height"]);
echo nl2br("\n ");
print('About You: ');
print($_POST["aboutU"]);

$em=$_POST["email"];
$pa=$_POST["password"];
$ge=$_POST["gender"];
$bm=$_POST["birthmonths"];
$bd=$_POST["birthdates"];
$by=$_POST["birthyears"];
$h=$_POST["height"];
$au=$_POST["aboutU"];
//$conn = new mysqli('127.0.0.1','root','wFLikVF7TywHMSKm','singles');
$conn = new mysqli('127.0.0.1','root','password121201','singles');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo nl2br("\n ");
echo "Connected successfully";

$sql="INSERT INTO userinfo VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt1 = $conn->prepare($sql);
if($stmt1= $conn->prepare($sql)) { 
    $stmt1->bind_param("ssssssss",$em, $pa, $ge, $bm, $bd, $by, $h, $au);
    $stmt1->execute();
    
} else {
    $error = $conn->errno . ' ' . $conn->error;
    echo $error;
}
$regular = 'regular';
$sql2="INSERT INTO login VALUES(?, ?, ?)";
$stmt2= $conn->prepare($sql2);
if($stmt2= $conn->prepare($sql2)) { 
    $stmt2->bind_param("sss",$em, $pa, $regular);
    $stmt2->execute();
    $stmt2->close();
} else {
    $error = $conn->errno . ' ' . $conn->error;
    echo $error;
}
 
mysqli_close($conn);

include 'footer.php';


