<?php
include "header.inc.php";
if (!isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])) {
  echo "Email Already Exists, Choose something else <br />";
?>

<form action="register.php">
  <button type="submit">Go back</button>
</form>
<?php
} else {
  header('Location: index.php');
}
?>
<?php
include 'footer.inc.php';
?>
