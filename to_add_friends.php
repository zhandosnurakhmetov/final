<?php

  $id = $_POST['id_for_adding'];

  include 'init/db.php';
  session_start();
  $uid = $_SESSION['user_id'];
  $sql_text = "INSERT INTO friends(id,uid,fid)
              VALUES(NULL,$uid,$id)
  ";
    $query = $connection->query($sql_text);
    header("Location:index.php");

?>
