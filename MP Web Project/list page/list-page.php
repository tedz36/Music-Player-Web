<!DOCTYPE html>
<?php
  require_once '../Music_Project/validate.php';
  require '../Music_Project/name.php';
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Side dashboard</title>
  <link rel="stylesheet" type="text/css" href="list-page.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

  <input type="checkbox" id="check">

  <header>
    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="banner">
    <img class="banner-image" src="headermusiclist.png">
    </div>
  </header>

  <div class="sidebar">
    <a href="../home page/home-page.php"><i class="fas fa-home"></i><span>Home</span></a>
    <a href="../list page/list-page.php"><i class="fas fa-music"></i><span>Music List</span></a>
    <a href="../about us page/about-us-page.php"><i class="fas fa-info-circle"></i><span>About Us</span></a>
    <a href="../settings page/settings-page.php"><i class="fas fa-cog"></i><span>Settings</span></a>
  </div>

 <div class="container">

      <div class="box" id=box1>
        <img src="cover1.jpg">
        <h4>Acoustic Breeze</h4>
      </div>

      <div class="box" id=box2>
        <img src="cover2.jpg">
        <h4>A Day to Remember</h4>
      </div>

      <div class="box" id=box3>
        <img src="cover3.jpg">
        <h4>Cute</h4>
      </div>

      <div class="box" id=box4>
        <img src="cover4.jpg">
        <h4>Small Guitar</h4>
      </div>

      <div class="box" id=box5>
        <img src="cover5.jpg">
        <h4>Sweet</h4>
      </div>

  </div>

  <div class="seccontainer">
      
      <div class="secbox" id=box6>
        <img src="cover6.jpg">
        <h4>Fligh High</h4>
      </div>

      <div class="secbox" id=box7>
        <img src="cover7.jpg">
        <h4>Lullaby</h4>
      </div>

      <div class="secbox" id=box8>
        <img src="cover8.jpg">
        <h4>Kiss of Death</h4>
      </div>

      <div class="secbox" id=box9>
        <img src="cover9.jpg">
        <h4>Orca Vibes</h4>
      </div>

      <div class="secbox" id=box10>
        <img src="cover10.jpg">
        <h4>Take Care</h4>
      </div>
      <button type="button" class="btnlogout" onclick="window.location.href='../Music_Project/logout.php'" target="_parent">Logout</button>
    </div>
</body>
</html>