<?php 
session_start(); 
include "./connection/connections.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
	

	$user_data = 'username='. $username;


	if (empty($username)) {
		header("Location: register.php?error=.Username is required&$user_data");
	    exit();
	}
	else if(empty($password)){
        header("Location: register.php?error=Password is required&$user_data");
	    exit();
}
	else{

	    $sql = "SELECT * FROM users WHERE username='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The username is taken. Try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(username, password) VALUES('$username', '$password')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: index.php");
	         exit();
           }else {
	           	header("Location: register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}


}else{
	header("Location: register.php");
	exit();
}
