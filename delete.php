<?php

  if($_SERVER['REQUEST_METHOD']=='POST'){

    include 'init/db.php';

    $sql_text = "DELETE FROM friends
              WHERE id = " . $_POST['id'];

              $connection->query($sql_text);
              header("Location:index.php");

  }

?>
