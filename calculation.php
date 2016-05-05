<?php

  if($_SERVER['REQUEST_METHOD']=='POST'){

    include 'init/db.php';

    $ball = $_POST['ball'];
    $receiver_id = $_POST['user_id'];
    session_start();
    $user_id = $_SESSION['user_id'];

    $sql_text = "INSERT INTO balls(id,receiver_id, ball, user_id)
                  VALUES(NULL, $receiver_id, $ball, $user_id)
                  ";
    $connection->query($sql_text);
    header("Location:index.php");
  }

 ?>
