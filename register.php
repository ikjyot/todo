<?php
include 'header.inc.php';
if (!isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])) {
  ?>
  <!--Page Content---------------------------------------------------------->
  <div class="register_section z-depth-4 hoverable">
    <h2>Sign Up</h2>
    <form method="POST" action="index.php">
      <div class="input-field">
        <input class="validate" type="text" id="reg_first_name" name="reg_first_name">
        <label class="" for="reg_first_name">First Name</label>
      </div>
      <div class="input-field">
        <input class="validate" type="text" id="reg_last_name" name="reg_last_name">
        <label for="reg_last_name">Last Name</label>
      </div>
      <div class="input-field">
        <input class="validate" type="text" id="reg_phone" name="reg_phone">
        <label for="reg_phone">Phone</label>
      </div>

      <input class="datepicker" id="reg_birthdate" placeholder="Birthday" type="date"  name="reg_birthday">

      <p style="display: inline">
        <input type="radio" id="reg_genderM" class="" name="reg_gender" value="M" checked>
        <label for="reg_genderM">Male</label>
      </p>
      <p style="display: inline">
        <input type="radio" id="reg_genderF" class="" name="reg_gender" value="M">
        <label for="reg_genderF">Female</label>
      </p>
      <br>
      <div class="input-field">
        <input class="validate" type="email" id="reg_email" name="reg_email">
        <label for="reg_email">Email</label>
      </div>

      <div class="input-field">
        <input class="validate" type="password" id="reg_password" name="reg_password">
        <label for="reg_password">Password</label>
      </div>
      <input type="hidden" name="action" value="registrar">
      <div class="signup_btn_div">
        <button type="submit" class="waves-effect waves-light btn hoverable red">
          Sign Up
        </button> &nbsp; &nbsp; <span style="color: grey">Already Registered?</span> <a href="login.php"><span class="hoverable" style="color: #f44336; ">Login</span></a>
      </div>
    </form>
  </div>
    <!--Page Content---------------------------------------------------------->
<?php
} else {
  header("Location: index.php");
}
include 'footer.inc.php';
?>