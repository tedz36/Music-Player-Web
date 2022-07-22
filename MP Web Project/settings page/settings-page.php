<!DOCTYPE html>
<?php
  require_once '../Music_Project/validate.php';
  require '../Music_Project/name.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Side dashboard</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="settings-page.css">
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
    <div class="right_area">
      <a href="../Music_Project/logout.php" class="logout_btn">Logout</a>
    </div>
  </header>


<div class="sidebar">
    <a href="../home page/home-page.php"><i class="fas fa-home"></i><span>Home</span></a>
    <a href="../list page/list-page.php"><i class="fas fa-music"></i><span>Music List</span></a>
    <a href="../about us page/about-us-page.php"><i class="fas fa-info-circle"></i><span>About Us</span></a>
    <a href="../settings page/settings-page.php"><i class="fas fa-cog"></i><span>Settings</span></a>
  </div>

<div class="container">
  <table id = "table">
          <thead>
            <tr>
              <th>Username</th>
              <th>Password</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $query = $conn->query("SELECT * FROM `users` WHERE username = ('$username');") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
          ?>
            <tr>
              <td><?php echo $fetch['username']?></td>
              <td><?php echo $fetch['password']?></td>
              <td><center><a class="abutton" href="edit_info.php?id=<?php echo $fetch['id']?>">Edit</a></center></td>

            </tr>
          <?php
            }
          ?>  
          </tbody>
        </table>
</div>
        </body>

    </html>