<?php

function isUserValid($username,$password){
  global $db;
  $query = 'SELECT * FROM users WHERE username = :name and 
     passwordHash = :pass';
  $statement = $db->prepare($query);
  $statement->bindValue(':name',$username);
  $statement->bindValue(':pass',$password);
  $statement->execute();
  $result= $statement->fetchAll();
  $statement->closeCursor();
  $count = $statement->rowCount();

  $query2 = 'SELECT * FROM users WHERE username = :name';
  $statement2 = $db->prepare($query);
  $statement2->bindValue(':name',$username);
  $statement2->bindValue(':pass',$password);
  $statement2->execute();
  $result2= $statement2->fetchAll();
  $statement2->closeCursor();
  $count2 = $statement2->rowCount();

  if($count == 1){
    $_SESSION['name'] = $result[0]['first_name'].' '.$result[0]['last_name'];
    $_SESSION['user_id'] = $result[0]['id'];
    $_SESSION['isLogged'] = true;
    setcookie('login', $username);
    setcookie('my_id', $result[0]['id']);
    setcookie('isLogged', true);
    return true;
  } else if($count2 == 1){
    return 'Email Exists';
  } else{
    session_unset();
    $_SESSION['name'] = false;
    $_SESSION['user_id'] = false;
    $_SESSION['isLogged'] = false;
    unset($_COOKIE['login']);
    setcookie('login', false);
    setcookie('isLogged', false);
    setcookie('my_id', false);
    return false;
  }
}
function createUser($username, $password) {
  global $db;
  $query = "SELECT * FROM users WHERE username = :name";
  $statement = $db->prepare($query);
  $statement->bindValue(':name', $username);
  $statement->execute();
  /*$result = $statement->fetchAll();*/
  $statement->closeCursor();
  $count = $statement->rowCount();

  if($count > 0) {
    return true;
  } else {
    $query = "INSERT INTO users (username, passwordHash) VALUES (:name, :pass)";
    $statement = $db->prepare($query);
    $statement->bindValue(':name',$username);
    $statement->bindValue(':pass',$password);
    $statement->execute();
    $statement->closeCursor();
    return false;
  }
}
function getTodoItems($user_id) {
  global $db;
  $query = "SELECT * FROM todos WHERE user_id = :userid";
  $statement = $db->prepare($query);
  $statement->bindValue(':userid', $user_id);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  return $result;
}
function getTodoItem($user_id, $todo_title) {
  global $db;
  $query = "SELECT * FROM todos WHERE user_id = :userid AND todo_item = :todo_title";
  $statement = $db->prepare($query);
  $statement->bindValue(':userid', $user_id);
  $statement->bindValue(':todo_title', $todo_title);
  $statement->execute();
  $result = $statement->fetch();
  $statement->closeCursor();
  return $result;
}
function addTodoItem($user_id, $todo_text) {
  global $db;
  $query = "INSERT INTO todos(user_id, todo_item) values (:user_id, :todo_text)";
  $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_id);
  $statement->bindValue(':todo_text', $todo_text);
  $statement->execute();
  $statement->closeCursor();
  return true;
}

function deleteTodoItem($user_id, $todo_id) {
  global $db;
  $query = 'DELETE FROM todos WHERE id = :todo_id and user_id = :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_id);
  $statement->bindValue(':todo_id', $todo_id);
  $statement->execute();
  $statement->closeCursor();
}

?>
