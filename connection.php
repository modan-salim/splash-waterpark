<?php  

$servername = 'localhost';  

$username = 'root';  

$pass = '';  

$dbname = 'splashwaterpark';  

$conn = mysqli_connect($servername, $username, $pass,$dbname);  

if(!$conn){  

  die('Could not connect: '.mysqli_connect_error());  

} 



?>
