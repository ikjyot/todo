<?php
 $dsn = 'mysql:host=sql2.njit.edu;dbname=isg6';
 $username = 'isg6';
 $password = '5Ofzy60W';
 try{
   $db = new PDO($dsn,$username,$password);
 }catch (PDOException $e){
   $error_message = $e->getMessage();
   echo $error_message;
   exit();
 }
?>
