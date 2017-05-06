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
echo "<h5>Welcome, ".$_SESSION['name'].'</h5>';
echo "<h5>Below, you may find your to-do items </h5>";
?>
    <?php
      global $result1, $result2;
    ?>
    <strong>ToDo Items</strong>
    <?php
      if (!empty($result1)) {
        foreach ($result1 as $res1):?>
          <ul id="todo" class="collapsible popout">
            <li>
              <div class="collapsible-header"><?php echo $res1['todo_title'] ?></div>
              <div class="collapsible-body">I am collapsible</div>
            </li>
          </ul>
          <form action="index.php" method="post">
            <input type="hidden" name="item_id" value="<?php echo $res1['id'] ?>">
            <input type="hidden" value="delete" name="action">
            <button type="submit" class="waves-light waves-button-input hoverable btn">Delete</button>
          </form>
        <?php endforeach;
      } else {
        echo '<h6>You have no pending items</h6>';
      } ?>
  <!--The Section Divider goes <here-->
  <div class="divider"></div>
  <strong>Completed Items</strong>

  <?php
  if (!empty($result2)) {
    foreach ($result2 as $res2):?>
      <ul id="todo" class="collapsible popout">
        <li>
          <div class="collapsible-header"><?php echo $res2['todo_title'] ?></div>
          <div class="collapsible-body">I am collapsible</div>
        </li>
      </ul>
      <form action="index.php" method="post">
        <input type="hidden" name="item_id" value="<?php echo $res2['id'] ?>">
        <input type="hidden" value="delete" name="action">
        <button type="submit" class="waves-light waves-button-input hoverable btn">Delete</button>
      </form>
    <?php endforeach;
  } else {
    echo '<h6>You have no completed items</h6>';
  } ?>

<?php
} else {
  header("Location: index.php");
}
include 'footer.inc.php';
?>