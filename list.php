<?php
/**
 * Created by PhpStorm.
 * User: isg6
 * Date: 4/3/2017
 * Time: 1:32 PM
 */
echo "<h1>To Do List System</h1>";
echo "Welcome, ".$_COOKIE['login'].'<br />';
echo "Below, you may find your to-do items <br /><br />";

?>

<html>
<head>

</head>
<body>

<table>
      <?php global $result;
      foreach($result as $res):?>
    <tr>
      <td><a href="details.php"><?php echo $res['todo_item'] ?></a></td>
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

  <form method="post" action="index.php">
    <input type="hidden" name="action" value="add">
    <label for="title">Title: </label> <input type="text" name="title"><br><br>
    <label for="description">Description: </label> <textarea name="description"></textarea><br><br>
    <label for="start_date">Start</label>
    <input type="text" id="start" name="start_date">
    <label for="end_date">End</label>
    <input type="text" id="end" name="end_date">
    <br><br>
    <input type="submit" value="Add">
  </form>

</body>
</html>
