<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	include 'init/db.php';

	$login = $_POST['login'];
	$password = $_POST['password'];

	$query = $connection->query("SELECT * FROM users
								WHERE login = \"".$login."\" AND
								password = \"".$password."\" AND
                active = 1 ");



	if($row= $query->fetch_object()){
		session_start();
		$_SESSION['user_id'] = $row->id;
			


		header("Location:index.php");

	}else{

		header("Location:index.php");
	}

}


//я должен найти у кого active = 0
	//и изменить его профайл
?>
