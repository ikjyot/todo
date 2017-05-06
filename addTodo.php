<?php
/**
 * Created by PhpStorm.
 * User: isg6
 * Date: 5/5/2017
 * Time: 10:35 AM
 */
include "header.inc.php";
?>
<h2>Add Todo</h2>
<form method="post" action="index.php">
  <input type="hidden" name="action" value="add">
  <div class="input-field">
    <label for="todo_title">Title</label>
    <input type="text" name="todo_title" id="todo_title" required>
  </div>
  <div class="input-field">
    <label for="due_date">Due Date</label>
    <input type="text" id="due_date" name="due_date">
  </div>
  <div class="input-field">
    <label for="due_time">Due Time</label>
    <input type='text' id="due_time" name="due_time">
  </div>
  <input type="submit" value="Add">
</form>
<?php
include 'footer.inc.php';
?>
