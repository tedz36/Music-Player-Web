<?php
	include_once("../Music_Project/connection/connections.php");
	$query = $conn->query("SELECT * FROM `users` WHERE `id` = '$_SESSION[id]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$username = $fetch['username'];
	$password = $fetch['password'];

	
?>