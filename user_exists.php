<?php
include "header.inc.php";
if (!isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])) {
?>
<h2>Email Already exists</h2>
<form action="register.php" method="post" class="center">
  <button class="btn waves-effect waves-light red" type="submit">Go back</button>
</form>
<?php
} else {
  header('Location: index.php');
}
?>
<?php
include 'footer.inc.php';
?>
