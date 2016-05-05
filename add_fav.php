<?php

    include 'init/db.php';

    $post_id = $_POST['post_id'];
    session_start();
    $user_id = $_SESSION['user_id'];

    $sql_text= "INSERT INTO favorite(id, uid,pid)
                VALUES(NULL,$user_id, $post_id)";

      $connection->query($sql_text);
      
 ?>
