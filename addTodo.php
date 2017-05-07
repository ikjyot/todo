<?php
include "header.inc.php";
if (isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])) {
  ?>
  <div id="add_todo" class="z-depth-4 hoverable">
    <h2>Add Todo</h2>
    <form method="post" action="index.php" style="display: inline">
      <input type="hidden" name="action" value="add">
      <div class="input-field">
        <label for="add_todo_title">Title</label>
        <input type="text" name="add_todo_title" id="add_todo_title" required>
      </div>
      <div class="input-field">
      <label for="add_due_date">Due Date</label>
        <input class="" type="text" id="add_due_date" name="add_due_date">
      </div>
      <input type='text' class="" id="add_due_time" placeholder="Due Time" name="add_due_time">

      <button class="waves-button-input waves-light btn hoverable red" type="submit">Add</button>
    </form>
    <a style="display: inline" href="index.php"><button class="waves-button-input waves-light btn red hoverable white-text">Cancel</button></a>
  </div>

<?php
} else {
  header("Location: index.php");
}
include 'footer.inc.php';
?>
