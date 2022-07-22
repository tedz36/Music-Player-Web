<!DOCTYPE html>
<?php
  require_once '../Music_Project/validate.php';
  require '../Music_Project/name.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Side dashboard</title>
	<link rel="stylesheet" type="text/css" href="about-us-page.css">
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
	
	<div class="container1">
		<div class="text">
			<h1>We've got your back.</h1>
		</div>
	</div>

	<div class="container">

			<div class="box" id=box1>
				<img src="janina.jpg">
				<h2>Janiña Briones</h2>
				<h3>09350995290</h3>
				<h3>brionesjanina@gmail.com</h3>
			</div>

			<div class="box" id=box2>
				<img src="julianne.jpg">
				<h2>Julianne Marie Bajao</h2>
				<h3>09561331001</h3>
				<h3>juliannebajao@gmail.com</h3>
			</div>

			<div class="box" id=box3>
				<img src="rhegie.jpg">
				<h2>Rhegie Joy Ayag</h2>
				<h3>09123456789</h3>
				<h3>rhegie.ayag14@gmail.com</h3>
			</div>

			<div class="box" id=box4>
				<img src="titus.jpg">
				<h2>Titus John Huerta</h2>
				<h3>09954849588</h3>
				<h3>titusjohnhuerta@gmail.com</h3>
			</div>
			<button type="button" class="btnlogout" onclick="window.location.href='../Music_Project/logout.php'" target="_parent">Logout</button>
	</div>
</body>
</html>