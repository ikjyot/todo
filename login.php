<?php
session_start();
include "header.inc.php";
if (!isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])) {
  ?>
  <div id="login_center" class="z-depth-4 hoverable">
  <h2>Log In</h2>
  <form method="POST" id="login_center_form" action="index.php">
    <div class="input-field">
      <label for="reg_email">Email</label>
      <input class="validate" type="email" id="reg_email" name="reg_email">
    </div>
    <br>
    <div class="input-field">
      <label for="reg_password">Password</label>
      <input class="validate" type="password" id="reg_password" name="reg_password">
    </div>
    <input type="hidden" name="action" value="test_user">
    <br>
    <button type="submit" class="btn waves-light waves-effect hoverable red">
      Login
    </button>
    &nbsp;&nbsp;Not Registered? <a href="register.php">Sign Up</a>
  </form>
    <div id="validate_login_check"></div>
  </div>

<?php
} else {
  echo 'Already Logged In! <a href="index.php">Go back?</a>';
}
include "footer.inc.php";
?>
