<?php
include "db.php";
$user_name=$_POST['user_name'];
$login=$_POST['login'];
$password=$_POST['password'];

echo $user_name;

$sql_text="INSERT INTO `users`(`id`, `user_name`, `login`, `password`, `active`) VALUES  (NULL,\"".$user_name."\",\"".$login."\",\"".sha1($password)."\",1)";

$query=$connection->query($sql_text);

header("Location:index.php");

?>