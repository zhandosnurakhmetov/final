<?php
include "db.php";
$image_id=$_POST['image_id'];
echo $image_id;


$sql_text=" UPDATE `images` SET `active`=0 WHERE id=$image_id ";

$query=$connection->query($sql_text);

header("Location:index.php");
?>