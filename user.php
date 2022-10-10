<?php
  require "useriden.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User Login Area</title>
    <link rel="stylesheet" href="style.css">
    <style>
      <?php include 'tampilanlogin.css' ?>
    </style>
  </head>

  <body>
    <?php if (isset($failed)) { ?>
      <div id="bad-login">WRONG USERNAME or PASSWORD</div>
    <?php } ?>

    <form id="user" method="post">
      <h1><b>User Login Area</b></h1>
        <label for="username"><b>Username</b></label>
        <input type="text" name="Username" required />
        <label for="password"><b>Password</b></label>
        <input type="password" name="Password" required />
        <input type="submit" class = "submit" name="userlogin" value="Login" />
        <label>
            <a href="admin.php" id="style2" data-replace="Admin Login?"><span>Admin Login?</span></a></p>
        </label>
    </form>
    </div>
</html>