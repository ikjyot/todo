<?php

function addTodoItem($user_id, $todo_text) {
  global $db;
  $query = "INSERT INTO todos(user_id, todo_item) values (:userid, :todo_text)";
  $statement = $db->prepare($query);
  $statement->bindValue(':userid', $user_id);
  $statement->bindValue(':todo_text', $todo_text);
  $statement->execute();
  $statement->closeCursor();
  return true;
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

function createUser($username, $password) {
  global $db;
  $query = "SELECT * FROM users WHERE username = :name";
  $statement = $db->prepare($query);
  $statement->bindValue(':name', $username);
  $statement->execute();
  $result = $statement->fetchAll();
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
     if($count == 1){
       setcookie('login', $username);
       setcookie('my_id', $result[0]['id']);
       setcookie('isLogged', true);
       return true;
     }else{
       unset($_COOKIE['login']);
       setcookie('login', false);
       setcookie('isLogged', false);
       setcookie('my_id', false);
       return false;
     }

   }

?>
