<?php
include "header.inc.php";
if (isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])) {
  ?>
  <div id="add_todo" class="z-depth-4 hoverable">
    <h2>Add Todo</h2>
    <form method="post" action="index.php">
      <input type="hidden" name="action" value="add">
      <div class="input-field">
        <label for="todo_title">Title</label>
        <input type="text" name="todo_title" id="todo_title" required>
      </div>

      <input class="datepicker" type="date" placeholder="Due Date" id="add_due_date" name="add_due_date">

      <input type='time' class="datepicker" id="add_due_time" placeholder="Due Time" name="add_due_time">

      <button class="waves-button-input waves-light btn hoverable red" type="submit">Add</button>
    </form>
  </div>

<?php
} else {
  header("Location: index.php");
}
include 'footer.inc.php';
?>
