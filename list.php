<?php
/**
 * Created by PhpStorm.
 * User: isg6
 * Date: 4/3/2017
 * Time: 1:32 PM
 */
session_start();
include 'header.inc.php';
if (isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])) {
?>
    <?php
      global $result1, $result2;
    ?>
  <div class="todo_pagecontent">
    <div class="pending_todo_items">
  <h5 class="center">Todo Items </h5>
    <div class="todo_container">
    <?php
      if (!empty($result1)) {
        foreach ($result1 as $res1):?>
          <ul id="todo_list" class="collapsible todo hoverable z-depth-3">
            <li>
              <div class="collapsible-header">
                <div class="left">
                  <form action="index.php" method="post" class="change_status">
                    <input type="hidden" name="todo_id" value="<?php echo $res1['id'] ?>">
                    <input type="hidden" value="change_status" name="action">
                    <button type="submit" class="btn_transparent check pending"><i class="material-icons marg4 pending">check</i></button>
                  </form>
                </div>
                <?php echo $res1['todo_title'] ?>
                <div class="right">
                  <form action="index.php" method="post" class="delete_todo_form">
                    <input type="hidden" name="todo_id" value="<?php echo $res1['id'] ?>">
                    <input type="hidden" value="delete" name="action">
                    <button type="submit" class="btn_transparent del"><i class="material-icons marg4">delete</i></button>
                  </form>
                </div>
                <div class="right">
                  <form action="editTodo.php" method="post" class="edit_todo_form">
                    <input type="hidden" name="todo_id" value="<?php echo $res1['id'] ?>">
                    <!--<input type="hidden" value="edit" name="action">-->
                    <button class="btn_transparent edit" type="submit"><i class="material-icons marg4">edit</i></button>
                  </form>
                </div>
              </div>
              <div class="collapsible-body">
                <p>Due Date: <?php echo $res1['due_date'] ?></p>
                <p>Due Date: <?php echo $res1['due_time'] ?></p>
              </div>
            </li>
          </ul>
        <?php endforeach;
      } else {
        echo '<h6 class="center grey-text">You have no pending items</h6>';
      } ?>

      <a href="addTodo.php"><button class="circle red btn-floating pulse right"
              style="margin-bottom: 15px;"><i class="material-icons">add</i>
      </button></a>

  <!--The Section Divider goes <here-->
  <div class="divider clearfix"></div>

      <div class="completed_todo_items">
      <h5 class="center">Completed Items </h5>

  <?php
  if (!empty($result2)) {
    foreach ($result2 as $res2):?>
      <ul id="complete_todo_list" class="collapsible todo hoverable z-depth-3">
        <li>
          <div class="collapsible-header completed">
            <div class="left">
              <form action="index.php" method="post" class="change_status" style="margin-bottom: 0px">
                <input type="hidden" name="todo_id" value="<?php echo $res2['id'] ?>">
                <input type="hidden" value="change_status" name="action">
                <button type="submit" class="btn_transparent check completed"><i class="material-icons marg4">check</i></button>
              </form>
            </div>
            <?php echo $res2['todo_title'] ?>
            <div class="right del">
              <form action="index.php" method="post" class="delete_todo_form">
                <input type="hidden" name="todo_id" value="<?php echo $res2['id'] ?>">
                <input type="hidden" value="delete" name="action">
                <button type="submit" class="btn_transparent del"><i class="material-icons marg4">delete</i></button>
              </form>
            </div>
          </div>
          <div class="collapsible-body">
            <p>Due Date: <?php echo $res2['due_date'] ?></p>
            <p>Due Date: <?php echo $res2['due_time'] ?></p>
          </div>
        </li>
      </ul>

    <?php endforeach;
  } else {
    echo '<h6 class="center grey-text">You have no completed items</h6>';
  } ?>
    </div>
  </div>
<?php
} else {
  header("Location: index.php");
}
include 'footer.inc.php';
?>