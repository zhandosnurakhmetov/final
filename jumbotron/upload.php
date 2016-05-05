<?php

			include "db.php";
			session_start();
			include "users.php";

			$randName=rand(10,10000).$login;
			echo $randName;echo "<br>";



    $file = $_FILES['avatar']['name'];
    $temp_file = explode(".", $file);

    $new_file = $randName.".".end($temp_file);
    $url_file=$_FILES['avatar']['tmp_name']." , ". 'images/'.$new_file;
    echo $_FILES['avatar']['tmp_name'].','. 'images/'.$new_file;
    echo "<br>";
    $url_file1=$_FILES['avatar']['tmp_name'];
    $url_file2= "images/".$new_file;
    $url_image=$url_file1.",".$url_file2;
  
    move_uploaded_file(  $url_file1, $url_file2);


    $sql_image="INSERT INTO `images`(`id`, `uid`, `image_url`, `post_date`, `active`) VALUES  (NULL,\"".$_SESSION['user_id']."\",\"".$url_file2."\",NOW(),1)";

    $query=$connection->query($sql_image);
   header("Location:index.php");


  

?>

<?php
/*
include "db.php";
session_start();
include "users.php";

$randName=rand(10,10000).$_SESSION['user_id'].$login;
echo $randName;
   

    $file = $_FILES['avatar']['name'];
    $temp_file = explode(".", $file);

    $new_file = $randName.".".end($temp_file);

    $url_file=$_FILES['avatar']['tmp_name']." ,".'images/'.$new_file;
    move_uploaded_file($url_file);

    header("Location:index.php");

 
  */

?>