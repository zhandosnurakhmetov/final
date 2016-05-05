<?php
include "db.php";
$user_name=$_POST['user_name'];
$login=$_POST['login'];
$password=$_POST['password'];


$sql_text= "


				UPDATE `users` SET `user_name`=\"".$user_name."\",`login`=\"".$login."\",`password`=\"".sha1($password)."\"
				 WHERE id = ".$_SESSION['user_id']." AND active = 1";
				

				$connection->query($sql_text);

header("Location:index.php");

?>