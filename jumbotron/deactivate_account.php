<?php
$sql_text= "


				UPDATE `users` SET `active=0		 WHERE id = ".$_SESSION['user_id']." ";
				

				$connection->query($sql_text);
				include "logout.php";

header("Location:index.php");


?>