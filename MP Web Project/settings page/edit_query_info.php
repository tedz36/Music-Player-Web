<?php 

if(ISSET($_POST['edit_info'])){
	$username = ($_POST['username']);
	$password = ($_POST['password']);

	$sql = "UPDATE `users` SET `username` = '$username', `password` = '$password' WHERE `id` = '$_REQUEST[id]'";
	$result = mysqli_query($conn, $sql);
		header("location:settings-page.php");
	}
?>
