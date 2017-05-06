<?php
/**
 * Created by PhpStorm.
 * User: isg6
 * Date: 5/5/2017
 * Time: 10:35 AM
 */
include "header.inc.php";
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
        <input class="datepicker" type='date' placeholder="Due Date" id="due_date" name="due_date">
      </div>
      <div class="input-field">
        <input class="datepicker" type='time' placeholder="Due Time" id="due_time" name="due_time">
      </div>
      <button class="waves-button-input waves-light btn red" type="submit">Edit</button>
    </form>
  </div>

<?php
include 'footer.inc.php';
?>