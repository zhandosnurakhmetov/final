<?php

	session_start();
	$USER = null;
	$online = false;

	if(isset($_SESSION['user_id'])){

		$query = $connection->query(" SELECT * FROM users WHERE id = ".$_SESSION['user_id']);

		if($row=$query->fetch_object()){

			$USER = $row;
			
			$online = true;

		}

	}

?>
