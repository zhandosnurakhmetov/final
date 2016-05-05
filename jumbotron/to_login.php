<?php

include "db.php";
$login=$_POST['login'];
$password=$_POST['password'];

$sql_text="Select * from users where login=\"".$login."\" and password=\"".$password."\"  ";
$query=$connection->query($sql_text);
if($row=$query->fetch_object()){


	session_start();
	$_SESSION['user_id']=$row->id;
	header("Location:index.php");


}else{

	header("Location:index.php");

}

?>