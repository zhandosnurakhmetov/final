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


		function clean($value = "") {
    			$value = trim($value);
    			$value = stripslashes($value);
    			$value = strip_tags($value);
    			$value = htmlspecialchars($value);

    			return $value;
}

		function check_length($value = "", $min, $max) {
					$result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
					return !$result;
}

		if($pass2 == $pass1){
			if(!empty($login) && !empty($pass1) && !empty($pass2) && !empty($name) && !empty($surname) && !empty($age) && !empty($university) && !empty($course)){
				if(check_length($login, 4, 25) && check_length($pass1, 5, 25 ) && check_length($pass2, 5, 25) && check_length($name, 3, 25) && check_length($surname, 5, 25) && check_length($university, 3, 25)){
					$query = "INSERT INTO users(id, name, surname, login, password, age, university, course,team, active)
					VALUES(NULL, \"".$name."\", \"".$surname."\", \"".$login."\", \"".$pass2."\", $age, \"".$university."\", \"".$course."\", \"".$team."\", 1)
						";
						$connection->query($query);
						header("Location:index.php");
				}else {

						echo "Incorrect length of datas";

				}
			}else{

						print "You have empty datas";

			}

		}

	}else{
			echo "U didn't go through validation form";
	}

?>
