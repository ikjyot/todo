<?php
/*Controller*/
require('db_connection.php');
require('db.php');
$action = filter_input(INPUT_POST, "action");
if($action == NULL)
{
  $action = "show_login_page";
}
if($action == "show_login_page")
{
  include('login.php');
}else if($action == 'test_user')
{
  $username = $_POST['reg_username'];
  $password = $_POST['reg_password'];
  $suc = isUserValid($username,$password);
  if($suc == true)
  {
    $result = getTodoItems($_COOKIE['my_id']);
    include ('list.php');
  }else{
    header("Location: badInfo.php");
  }
}else if ($action=='registrar') {
  //echo "We want create a new account";
  $name = filter_input(INPUT_POST, 'reg_username');
  if(isset($name)) {
    $pass = filter_input(INPUT_POST, 'reg_password');
    $exist = createUser($name, $pass);

    if ($exist == true) {
      include ('user_exists.php');
    } else {
      header("Location: index.php");
    }

  }
} else if ($action == 'add') {
  if (isset($_POST['description']) and $_POST['description'] != '') {
    addTodoItem($_COOKIE['my_id'], $_POST['description']);
  }
  $result = getTodoItems($_COOKIE['my_id']);
  include ('list.php');
} else if($action == 'delete'){
  if(isset($_POST['item_id'])) {
    $selected = $_POST['item_id'];
    deleteTodoItem($_COOKIE['my_id']);
  }
  $result = getTodoItems($_COOKIE['my_id']);
  include ('list.php');
}
?>
