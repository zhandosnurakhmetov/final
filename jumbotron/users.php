<?php
include "db.php";


if(isset($_SESSION['user_id'])){

	$user_id=$_SESSION['user_id'];
	$sql_text="select * from users where id=$user_id";
	$query=$connection->query($sql_text);
	while($row=$query->fetch_object()){

		$user_name=$row->user_name;
		$login=$row->login;
	}


}


?>