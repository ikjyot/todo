<?php
session_start();
include 'header.inc.php';
if (!isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])) {
  ?>
  <!--Page Content---------------------------------------------------------->
  <h1>Sign Up</h1>
  <form method="post" id="registration_form" action="index.php">
    <strong>First Name: </strong>
    <input type="text" name="reg_first_name" value=""/> <br> <br>

    <strong>Last Name: </strong>
    <input type="text" name="reg_last_name" value=""/> <br> <br>

    <strong>Phone: </strong>
    <input type="text" name="reg_phone" value=""/> <br> <br>

    <strong>Birthday: </strong>
    <input type="text" name="reg_birthday" placeholder="yyyy-mm-dd" value=""/> <br> <br>

    <strong>Gender: </strong>
    Male <input type="radio" name="reg_gender" value="M"/>
    Female <input type="radio" name="reg_gender" value="F"/> <br> <br>

    <strong>Email: </strong>
    <input type="text" name="reg_email" value=""/> <br> <br>

    <strong>Password: </strong>
    <input type="password" name="reg_password" value=""/> <br> <br>

    <input type="hidden" name="action" value="registrar"/>

    <button type="submit">Sign Up</button> <a href="login.php">Already Registered? Login</a>
  </form>
  <!--Page Content---------------------------------------------------------->
<?php
} else {
  echo '<h1>You are already registered</h1>';
?>
<form method="post" action="index.php">
  <button type="submit">Go back</button>
</form>
<?php
}
include 'footer.inc.php';
?>