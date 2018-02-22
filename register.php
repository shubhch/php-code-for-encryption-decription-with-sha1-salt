<?php
 
    require_once("connection.php");

if(isset($_POST['submit'])) {
    
    $full_name=$_POST['full name'];
    $username=$_POST['username'];
    $salt="ahsgasadxh2122";
    $passward=$_POST['password'].$salt;
    $password=shal($password);

    
    if(mysqli_query($connection," INSERT INTO 'users'(full_name','username','password')VALUES (
    '{$full_name}', '{username}','{$password}');"))  {
        header("Location:loggin.php");
        exit;
      }
}
 


?>