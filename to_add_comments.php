<?php

  include 'init/db.php';

  $i = $_POST['post_id'];
  $text = $_POST['text'];
  session_start();
  $uid = $_SESSION['user_id'];

  $sql_text = "INSERT INTO comments(id,uid,pid,text)
                VALUES(NULL,$uid, $i,\"".$text."\")
  ";

  $query = $connection->query($sql_text);
  header("Location:load_more.php");

 ?>
