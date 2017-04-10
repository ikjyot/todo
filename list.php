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
      <?php foreach($result as $res):?>
    <tr>
        <td><?php echo $res['todo_item']. '<br />'; ?></td>
    </tr>
      <?php endforeach; ?>

    <tr>
      <form action="add_todo.php">
        <input type="submit" value="Add" />
      </form>
    </tr>
  </table>
<form method="post" action="index.php">
  <strong>Description: </strong> <input type="text" name="description"><br />
  <input type="hidden" name="action" value="add">
  <input type="submit" value="Add">
</form>
</body>
</html>
