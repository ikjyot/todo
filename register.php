<?php
include 'header.inc.php';
if (!isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])) {
  ?>
  <!--Page Content---------------------------------------------------------->
  <h2>Sign Up</h2>
  <form method="POST" action="index.php">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" id="reg_first_name" name="reg_first_name">
      <label class="mdl-textfield__label" for="reg_first_name">First Name</label>
    </div>
    <br>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" id="reg_last_name" name="reg_last_name">
      <label class="mdl-textfield__label" for="reg_last_name">Lastname</label>
    </div>
    <br>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" id="reg_phone" name="reg_phone">
      <label class="mdl-textfield__label" for="reg_phone">Phone</label>
    </div>
    <br>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" id="reg_birthday" name="reg_birthday">
      <label class="mdl-textfield__label" for="reg_birthday">Birthday</label>
    </div>
    <br>
    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="reg_genderM">
      <input type="radio" id="reg_genderM" class="mdl-radio__button" name="reg_gender" value="M" checked>
      <span class="mdl-radio__label">Male</span>
    </label>
    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="reg_genderF">
      <input type="radio" id="reg_genderF" class="mdl-radio__button" name="reg_gender" value="F">
      <span class="mdl-radio__label">Female</span>
    </label>
    <br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" autocomplete="off" type="email" id="reg_email" name="reg_email">
        <label class="mdl-textfield__label" for="reg_email">Email</label>
      </div>
      <br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="password" id="reg_password" name="reg_password">
        <label class="mdl-textfield__label" for="reg_password">Password</label>
      </div>
    <br><br>
    <input type="hidden" name="action" value="registrar">
    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
      Sign Up
    </button> &nbsp; &nbsp; Registered? <a href="login.php">Login</a>
  </form>
  <!--Page Content---------------------------------------------------------->
<?php
} else {
  header("Location: index.php");
}
include 'footer.inc.php';
?>