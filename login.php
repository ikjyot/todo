<?php
session_start();
include "header.inc.php";
if (!isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])) {
  ?>

  <h2>Log In</h2>
  <form method="POST" action="index.php">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="email" id="reg_email" name="reg_email">
      <label class="mdl-textfield__label" for="reg_email">Email</label>
    </div>
    <br>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="password" id="reg_password" name="reg_password">
      <label class="mdl-textfield__label" for="reg_password">Password</label>
    </div>
    <input type="hidden" name="action" value="test_user">
    <br>
    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
      Login
    </button>
    &nbsp;&nbsp;Not Registered? <a href="register.php">Sign Up</a>
  </form>

<?php
} else {
  echo 'Already Logged In! <a href="index.php">Go back?</a>';
}
include "footer.inc.php";
?>
