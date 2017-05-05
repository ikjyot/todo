<?php

function isUserValid($email,$password){
  global $db;
  $query = 'SELECT * FROM users WHERE email = :email and 
     password = :pass';
  $statement = $db->prepare($query);
  $statement->bindValue(':email',$email);
  $statement->bindValue(':pass',$password);
  $statement->execute();
  $result= $statement->fetchAll();
  $statement->closeCursor();
  $count = $statement->rowCount();

  $query2 = 'SELECT * FROM users WHERE email = :name';
  $statement2 = $db->prepare($query2);
  $statement2->bindValue(':email',$email);
  $statement2->bindValue(':pass',$password);
  $statement2->execute();
  //$result2= $statement2->fetchAll();
  $statement2->closeCursor();
  $count2 = $statement2->rowCount();

  if($count == 1){
    $_SESSION['name'] = $result[0]['first_name'].' '.$result[0]['last_name'];
    $_SESSION['user_id'] = $result[0]['id'];
    $_SESSION['isLogged'] = true;
    setcookie('login', $email);
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
function createUser($email, $password) {
  global $db;
  $query = "SELECT * FROM users WHERE email = :email";
  $statement = $db->prepare($query);
  $statement->bindValue(':email', $email);
  $statement->execute();
  /*$result = $statement->fetchAll();*/
  $statement->closeCursor();
  $count = $statement->rowCount();

  if($count > 0) {
    return true;
  } else {
    $query = "INSERT INTO users (email, password) VALUES (:email, :pass)";
    $statement = $db->prepare($query);
    $statement->bindValue(':email',$email);
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
  $query = "SELECT * FROM todos WHERE user_id = :userid AND todo_title = :todo_title";
  $statement = $db->prepare($query);
  $statement->bindValue(':userid', $user_id);
  $statement->bindValue(':todo_title', $todo_title);
  $statement->execute();
  $result = $statement->fetch();
  $statement->closeCursor();
  return $result;
}
function addTodoItem($user_id, $todo_title, $description, $due_date, $due_time) {
  global $db;
  $query = "INSERT INTO todos(user_id, todo_title, description, due_date, due_time) values (:user_id, :todo_title, :description, :due_date, :due_time)";
  $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_id);
  $statement->bindValue(':todo_title', $todo_title);
  $statement->bindValue(':description', $description);
  $statement->bindValue(':due_date', $due_date);
  $statement->bindValue(':due_time', $due_time);
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
