<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

  include 'init/db.php';

		$login = $_POST['login'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		$name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $university = $_POST['university'];
    $course = $_POST['course'];
		$team = $_POST['team'];
    session_start();
    $id = $_SESSION['user_id'];

		if($pass2 == $pass1){

			$query = "UPDATE users
                SET login = \"".$login."\", password = \"".$pass2."\", name = \"".$name."\", surname = \"".$surname."\", age = \"".$age."\",university = \"".$university."\",course = \"".$course."\",team = \"".$team."\"
                WHERE id = $id
          ";



			$connection->query($query);

		  header("Location:index.php");

		}

	}else{

		header("Location:index.php");

	}

?>
