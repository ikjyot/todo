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
echo "<h1>To Do List System</h1>";
echo "Welcome, ".$_SESSION['name'].'<br />';
echo "Below, you may find your to-do items <br /><br />";
?>

  <table>
      <?php
      global $result;
      foreach($result as $res):?>
    <tr>
      <td><a href="details.php?todo=<?php echo $res['todo_item'] ?>"><?php echo $res['todo_item'] ?></a></td>
      <td>
        <form action="index.php" method="post">
          <input type="hidden" name="item_id" value="<?php echo $res['id'] ?>">
          <input type="hidden" value="delete" name="action">
          <input type="submit" value="Delete">
        </form>
      </td>
    </tr>
      <?php endforeach; ?>
  </table><br><br>

  <!--<form method="post" action="index.php">
    <input type="hidden" name="action" value="add">
    <table>
      <tr>
        <td><label for="title">Title: </label></td>
        <td><input type="text" name="title" id="title" required></td>
      </tr>
      <tr>
        <td><label for="description">Description: </label></td>
        <td><textarea id="description" name="description"></textarea></td>
      </tr>
      <tr>
        <td><label for="start_date">Start</label></td>
        <td><input type="date" id="start_date" name="start_date"></td>
      </tr>
      <tr>
        <td><label for="end_date">End</label></td>
        <td><input type='date' id="end_date" name="end_date"></td>
      </tr>
      <tr>
        <td><input type="submit" value="Add"></td>
      </tr>
    </table>
  </form>-->
<?php
} else {
  header("Location: index.php");
}
include 'footer.inc.php';
?>