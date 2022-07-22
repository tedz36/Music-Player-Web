<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
         <form class="signup" action="index-check.php" method="post">
      <h2>LOGIN</h2>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>


          <label>Username</label>
               <input type="text" name="username" placeholder="Username"><br>

      <label>Password</label>
      <input type="password" name="password" placeholder="Password"><br>

      <button type="submit">LOGIN</button><br><br><br>
          <a href="register.php" class="ca">Create an account?</a>
     </form>

          
     </form>
</body>
</html>