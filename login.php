<?php
session_start();
?>

<html>
<body>
  <h1>Login</h1>
  <form method = "post" action="index.php">
  <strong>Email:</strong><input type="email" name="reg_email" value=""/><br><br>
  <strong>Password:</strong><input type="password" name="reg_password" value=""/><br><br>
  <input type ="hidden" name="action" value="test_user"><br>
  <input type="submit" value="Login"/>
  </form>

  <form action="register.php">
    <input type="submit" value="Register">
  </form>
  <form action="logout.php">
    <input type="submit" value="Logout">
  </form>
</body>
</html>
