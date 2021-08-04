<?php
$host="localhost";
$user="root";
$password="";
$dbase="registary";

$db = mysqli_connect($host,$user,$password,$dbase);


session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = mysqli_real_escape_string($db,$_POST['email']);
    $psw = mysqli_real_escape_string($db,$_POST['psw']); 
      
    $sql = "SELECT username FROM user_1 WHERE email = '$email' and psw = '$psw'";
    $result = mysqli_query($db,$sql);
      
    $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
    if($count == 1) {
    	$_SESSION['email'] = $email;
         
         header("location: welcome.php");
    }else {
    	echo "Your Login Name or Password is invalid";
    }
}
?>







?>
