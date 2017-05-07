<?php
/**
 * Created by PhpStorm.
 * User: isg6
 * Date: 5/5/2017
 * Time: 10:35 AM
 * , $_SESSION['todo_id'], $_SESSION['todo_title'], $_SESSION['due_date'], $_SESSION['due_time']
 */
session_start();
include "header.inc.php";
if (isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])) {
  ?>
  <div id="edit_todo" class="z-depth-4 hoverable">
    <h2>Edit Todo Item</h2>
    <form method="post" action="index.php" style="display: inline">
      <input type="hidden" name="todo_id" value="<?php echo $_SESSION['todo_id'] ?>">
      <input type="hidden" name="action" value="update_todo_item">
      <div class="input-field">
        <label for="todo_title">Title</label>
        <input type="text" name="edit_todo_title" id="todo_title" value="<?php echo $_SESSION['todo_title'] ?>" required>
      </div>
      <div class="input-field">
        <input class="datepicker" type='date' placeholder="Due Date" id="edit_due_date" value="<?php echo $_SESSION['due_date'] ?>" name="edit_due_date">
      </div>
      <div class="input-field">
        <input class="datepicker" type='time' placeholder="Due Time" id="edit_due_time" value="<?php echo $_SESSION['due_time'] ?>" name="edit_due_time">
      </div>
      <button class="waves-button-input waves-light btn red hoverable" type="submit" style="display: inline">Edit</button>
    </form>
    <a style="display: inline" href="index.php"><button class="waves-button-input waves-light btn red hoverable white-text">Cancel</button></a>
  </div>

<?php
} else {
  header("Location: index.php");
}
include 'footer.inc.php';
?>