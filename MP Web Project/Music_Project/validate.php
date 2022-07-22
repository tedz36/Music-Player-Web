<?php 
	session_start();
	if(!ISSET($_SESSION['id'])){
		header("location:../Music_Project/index.php");
	}