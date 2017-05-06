<?php
/**
 * Created by PhpStorm.
 * User: isg6
 * Date: 5/5/2017
 * Time: 10:35 AM
 */
include "header.inc.php";
if (isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])) {
  ?>
  <!--Need to get todo id before being able to actually get the already linked todo data-->
  <div id="edit_todo" class="z-depth-4 hoverable">
    <h2>Edit Todo Item</h2>
    <form method="post" action="index.php">
      <input type="hidden" name="action" value="edit">
      <div class="input-field">
        <label for="todo_title">Title</label>
        <input type="text" name="todo_title" id="todo_title" required>
      </div>
      <div class="input-field">
        <input class="datepicker" type='date' placeholder="Due Date" id="edit_due_date" name="edit_due_date">
      </div>
      <div class="input-field">
        <input class="datepicker" type='time' placeholder="Due Time" id="edit_due_time" name="edit_due_time">
      </div>
      <button class="waves-button-input waves-light btn red hoverable" type="submit">Edit</button>
    </form>
  </div>

<?php
} else {
  header("Location: index.php");
}
include 'footer.inc.php';
?>