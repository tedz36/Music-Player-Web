<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
     <form class="signup" action="register-check.php" method="post">
      <h2>REGISTER</h2>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

          <label>Username</label>
          <?php if (isset($_GET['username'])) { ?>
               <input type="text" 
                      name="username" 
                      placeholder="Username"
                      value="<?php echo $_GET['username']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="username" 
                      placeholder="Username"><br>
          <?php }?>

      <label>Password</label>
      <input type="password" 
                 name="password" 
                 placeholder="Password"><br>

      <button type="submit">Register</button><br><br><br>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>

</body>
</html>