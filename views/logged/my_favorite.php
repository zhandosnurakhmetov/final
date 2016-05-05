

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php

  $user_id = $_SESSION['user_id'];
  include 'css/comments.php';

  $sql_text = "SELECT posts.title, favorite.uid,
                      users.name, users.surname,users.team, users.university,
                      posts.day , posts.month, posts.year,posts.time_hour,posts.time_minute,posts.part_of_day,posts.place,posts.time,posts.vs,posts.payment,posts.id
                FROM favorite
                JOIN posts
                ON favorite.pid = posts.id
                JOIN users
                ON favorite.uid = users.id
                HAVING favorite.uid = $user_id

    ";


    //  echo $sql_text;

     $query= $connection->query($sql_text);
     $o = 1;
     while($row=$query->fetch_object()){

 ?>


 	<hr style="margin-left:12%; margin-right:25%;"><div class="container">
 	<div class="row" style="margin-left:10%;">
 	<div class="col-sm-7">
 	<div class="">
 	
 	<div id="info<?php echo $o;?>" style="display:none;">
 	<h5>Team: <?php echo $row->team ;?>|University:<?php echo $row->university;?></h5>
 	</div>
 	<b><?php echo $row->day." ".$row->month." ".$row->year?>,</b>
 	<?php echo $row->time_hour." : ".$row->time_minute." ". $row->part_of_day;?>,
 	<?php echo $row->place;?>,
 	<?php echo $row->time;?>hours,
 	we will play <?php echo $row->vs;?>
 	and pitch costs <?php echo $row->payment;?> tenge per hour

 	</div>

 	</div>
 	<div class="col-sm-2" style="border-left:0.5px solid #d3d3d3;height:90px">
 	<center><span style="color:lightblue;" id = "star<?php echo $o;?>" class="glyphicon glyphicon-star"></span><br><br>
 	<input type="hidden" name="id" id = "postid<?php echo $o;?>" value="<?php echo $row->id;?>">
 	<form action="?page=tocomment_favorite" method="post"><button class="btn btn-info" id = "comments<?php echo $o;?>">Comment</button>
 	<input type="hidden" name="post_id" value="<?php echo $row->id;?>"></form>
 	</center>
 	</div>
 	</div>
 	</div>
<?php
  $o++;
} ?>


<script type="text/javascript">


    // $("#star").click(function(){
    // 	alert("successfully added");
    // });

  $(document).ready(function(){
    $("#star1").click(function(){
      deleteFavorite1();
    });
    $("#star2").click(function(){
      deleteFavorite2();
    });
    $("#star3").click(function(){
      deleteFavorite3();
    });
    $("#star4").click(function(){
      deleteFavorite4();
    });
    $("#star5").click(function(){
      deleteFavorite5();
    });
    $("#star6").click(function(){
      deleteFavorite6();
    });
    $("#star7").click(function(){
      deleteFavorite7();
    });
    $("#star8").click(function(){
      deleteFavorite8();
    });
    $("#star9").click(function(){
      deleteFavorite9();
    });
    $("#star10").click(function(){
      deleteFavorite10();
    });
  });


function deleteFavorite2(){

  $.post("add_fav.php",{

     post_id:$("#postid2").val()

  },function(data){

    $("#test").html(data);

  });

}
function deleteFavorite1(){

    $.post("delete_favorite.php",{

       post_id:$("#postid1").val()

    },function(data){

      $("#test").html(data);

    });

  }
  function deleteFavorite3(){

      $.post("add_fav.php",{

         post_id:$("#postid3").val()

      },function(data){

        $("#test").html(data);

      });

    }	function deleteFavorite4(){

          $.post("add_fav.php",{

             post_id:$("#postid4").val()

          },function(data){

            $("#test").html(data);

          });

        }	function deleteFavorite5(){

              $.post("add_fav.php",{

                 post_id:$("#postid5").val()

              },function(data){

                $("#test").html(data);

              });

            }	function deleteFavorite6(){

                  $.post("add_fav.php",{

                     post_id:$("#postid6").val()

                  },function(data){

                    $("#test").html(data);

                  });

                }	function deleteFavorite7(){

                      $.post("add_fav.php",{

                         post_id:$("#postid7").val()

                      },function(data){

                        $("#test").html(data);

                      });

                    }
                    function deleteFavorite8(){

                          $.post("add_fav.php",{

                             post_id:$("#postid8").val()

                          },function(data){

                            $("#test").html(data);

                          });

                        }function deleteFavorite9(){

                              $.post("add_fav.php",{

                                 post_id:$("#postid9").val()

                              },function(data){

                                $("#test").html(data);

                              });

                            }function deleteFavorite10(){

                                  $.post("add_fav.php",{

                                     post_id:$("#postid10").val()

                                  },function(data){

                                    $("#test").html(data);

                                  });

                                }


</script>
