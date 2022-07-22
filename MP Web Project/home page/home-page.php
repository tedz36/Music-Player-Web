<?php 
session_start();

if (isset($_SESSION['username'])) {

 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Side dashboard</title>
	<link rel="stylesheet" type="text/css" href="home-page.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

	<input type="checkbox" id="check">

	<header>
		<label for="check">
			<i class="fas fa-bars" id="sidebar_btn"></i>
		</label>
		<div class="banner">
		<img class="banner-image" src="headerfinal.png">
		</div>
	</header>


	<div class="sidebar">
		<a href="../home page/home-page.php"><i class="fas fa-home"></i><span>Home</span></a>
		<a href="../list page/list-page.php"><i class="fas fa-music"></i><span>Music List</span></a>
		<a href="../about us page/about-us-page.php"><i class="fas fa-info-circle"></i><span>About Us</span></a>
		<a href="../settings page/settings-page.php"><i class="fas fa-cog"></i><span>Settings</span></a>
	</div>

	<div class="container">
		<div class="text">
		<h1>About MeloTouch</h1>
		<p>
			Melo Touch is a simple music player for listening to our self-made songs collection system. The user can play calm and relaxing songs<br> that can touch the user’s hearts and soul. The songs that can be played in the music player are selected by the system developers and <br> ensured that all of the songs can keep the users away from stress and gain positive vibes.
		</p>
		<p>
			All people can be the user of the system and there will be no particular set of people who can only access the system or restrictions as <br> long as the users want to listen calm and relaxing songs.
		</p>

		<button type="button" class="btn" onclick="window.location.href='../Music_Project/player.php'" target="_parent">Music Player</button>
		<button type="button" class="btnlogout" onclick="window.location.href='../Music_Project/logout.php'" target="_parent">Logout</button>
	</div>
</body>
</html>

<?php 
}else{
     header("Location: ../Music_Project/index.php");
     exit();
}
 ?>

