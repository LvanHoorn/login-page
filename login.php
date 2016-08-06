<?php

if(!empty($_POST['email']) && !empty($_POST['password'])):

endif;
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
  </head>
  <body>

  <div class="header">
    <a href="/auth">DAY-Studio Yogi's</a>
  </div>

    <h1>Login</h1>

    <span>or <a href="register.php">register here</a></span>

    <form class="" action="login.php" method="post">

      <input type="text" placeholder="Enter your email" name="email">
      <input type="password" placeholder="and password" name="password">
      <input type="submit" placeholder="Submit" name="Submit" value="Submit">

    </form>

    </form>
  </body>
</html>