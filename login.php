<?php
session_start();
include "header.inc.php";
if (!isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])) {
  ?>

  <h1>Login</h1>
  <form method="post" action="index.php">
    <input type="email" name="reg_email" placeholder="Email" value=""/><br><br>
    <input type="password" name="reg_password" placeholder="Password" value=""/><br><br>
    <input type="hidden" name="action" value="test_user">
    <button type="submit">Login</button>
  </form>

  <form action="register.php">
    <input type="submit" value="Register">
  </form>

<?php
} else {
  echo 'Already Logged In! <a href="index.php">Go back?</a>';
}
include "footer.inc.php";
?>
