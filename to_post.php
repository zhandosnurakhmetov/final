<?php

  include 'init/db.php';

  if($_SERVER['REQUEST_METHOD']=='POST'){

    $title = $_POST['title'];
    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $place=$_POST['place'];
    $time=$_POST['time'];
    $vs=$_POST['vs'];
    $payment=$_POST['payment'];
    $comment=$_POST['comment'];
    $time_hour = $_POST['time_hour'];
    $time_minute = $_POST['time_minute'];
    $part_of_day = $_POST['part_of_day'];

    session_start();
    $uid = $_SESSION['user_id'];

    $sql_text = "INSERT INTO posts(id,uid,title,day,month,year,time_hour,time_minute,part_of_day,place,time,vs,payment,comments)
                  VALUES(NULL,$uid,\"".$title."\",$day,\"".$month."\",$year,$time_hour,$time_minute,\"".$part_of_day."\",\"".$place."\",$time,\"".$vs."\",$payment,\"".$comment."\")
    ";

    $connection->query($sql_text);
    header("Location:index.php");

  }

 ?>
