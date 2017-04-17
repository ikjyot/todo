<?php
/**
 * Created by PhpStorm.
 * User: isg6
 * Date: 4/10/2017
 * Time: 2:37 PM
 */
require('db_connection.php');
require('db.php');


if (isset($_GET['todo']) && isset($_COOKIE['my_id'])){
  $result = getTodoItem($_COOKIE['my_id'], $_GET['todo']);
  ?>

<table>
  <tr>
    <td>Title:</td>
    <td><?php echo $result['todo_item']?></td>
  </tr>
  <tr>
    <td>Description:</td>
    <td><?php echo $result['description']?></td>
  </tr>
  <tr>
    <td>Start</td>
    <td><?php echo $result['start_date']?></td>
  </tr>
  <tr>
    <td>End</td>
    <td><?php echo $result['end_date']?></td>
  </tr>
</table>

<?php } ?>