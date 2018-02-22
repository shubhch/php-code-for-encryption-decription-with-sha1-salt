

<?php
    
	session_start();
	require_once("connection.php");
	
	if(isset($_SESSION['user_id'])){
		redirect_to("read.php");
	}
	
	if(isset($_POST['submit'])){
	 
	 $username=$_POST['username'];
	 
	 $salt="hsdhsdsbcsjcscdswd43356";
	 
	 $password=$_POST['password'].$salt;
	 
	 $password=shal($password);
	 
	 $data=mysqli_query($connection,"SELECT * FROM 'users' WHERE 'username' = '{$username}' AND password='{$password}'");
	 
	 while($row=mysqli_fetch_array($data)){
	 $id=$row['id'];
	 if(isset($id)){
	 $_SESSION['user_id']=$id;
	 header("Location: home.php");
	 exit;
	 }else{
		 echo "Invalid Username or Password!<br>";
	 }
	 
	 }
	 
	}
	 
	 ?>
