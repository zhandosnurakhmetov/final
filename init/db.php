<?php

	$connection = new mysqli("localhost","root","","final_project");	

	if(!$connection->connect_error){

		define("CONNECTED",true);

	}else{

		define("CONNECTED",false);

	}

?>
