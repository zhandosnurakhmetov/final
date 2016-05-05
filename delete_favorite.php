<?php

    $post_id = $_POST['post_id'];
    //echo $post_id;
    include 'init/db.php';
    $sql_text = "DELETE FROM favorite
                WHERE pid = $post_id;
    ";

    $query = $connection->query($sql_text);
    header("Location:index.php");
 ?>
