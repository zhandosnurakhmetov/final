<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $uid = $_SESSION['user_id'];

    $sql_text = "SELECT * FROM users
                WHERE id = $uid
                ";

    $query=$connection->query($sql_text);

    if($row=$query->fetch_object()){

     ?>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            <div class="well profile">
                <div class="col-sm-10">
                    <div class="col-xs-12 col-sm-8">
                        <br><h2><?php echo $row->name." ".$row->surname; ?></h2>
                        <p><strong>University: </strong><?php echo $row->university; ?></p>
                        <p><strong>Team: </strong><?php echo $row->team; ?></p>
                        <p><strong>Course: </strong><?php echo $row->course; ?></p>
                        <p><strong>Age: </strong><?php echo $row->age; ?></p>
                    </div>
                    <div class="col-xs-12 col-sm-4 text-center">
                        <figure style="">

                          <br><br><br><img src="http://i.telegraph.co.uk/multimedia/archive/03193/beckham-today-heat_3193019k.jpg" width="200"  alt="" />

                        </figure>
                    </div>
                </div>
                <div class="col-xs-12 divider text-center">
                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong>
                          <?php

                              $sql_text3= "SELECT * FROM friends
                                            WHERE uid = $uid";
                              $query3=$connection->query($sql_text3);
                              $w=0;
                              while($row3=$query3->fetch_object()) {
                                $w++;


                              }
                              echo $w;

                          ?>
                        </strong></h2>
                        <p><small>Friends</small></p>
                        <a href="?page=show_my_friends" class="btn btn-success btn-block"><span class="fa fa-users"></span> My friends </a>
                    </div>

                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong>
                          <?php

                          $sql_text2 = "SELECT * FROM posts
                                      WHERE uid = $uid
                                      ";

                          $query2=$connection->query($sql_text2);
                          $i=0;
                          while ($row2=$query2->fetch_object()) {
                            $i++;


                          }
                          echo $i;
                           ?>
                        </strong></h2>
                        <p><small>My posts</small></p>
                        <a href="?page=myposts" class="btn btn-info btn-block"><span class="fa fa-comments-o"></span> View My Posts </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong>

                          <?php

                              $sql_text6 = "SELECT * FROM balls
                                            WHERE receiver_id = $uid";
                              $query6 = $connection->query($sql_text6);
                              $z=0;$sum=0;
                              while($row6=$query6->fetch_object()){
                                $sum+=$row6->ball;
                                $z++;
                              }
                              echo round($sum/$z,2);

                          ?>

                        </strong></h2>
                        <p><small>Rating</small></p>
                        <div class="">
                          <a href="?page=options" class="btn btn-primary btn-block" ><span class="fa fa-gear"></span> Options </a>



                          </button>

                        </div>
                    </div>

                    <div class="col-xs-12 divider text-center">

                </div>
            </div>
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">

                  <br>  <a href="views/logged/my_friends.php" class="btn btn-success btn-block"><span class="fa fa-search"></span>Search users</a>
                </div>

                <div class="col-xs-12 col-sm-4 emphasis">
                    <br>
                    <a href="?page=post" class="btn btn-info btn-block"><span class="fa fa-plus"></span>To post</a>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">

                  <br><a href="?page=change_avatar" class="btn btn-primary btn-block"><span class="fa fa-plus"></span>Change avatar</a>

                </div>

                <div class="col-xs-12 divider text-center">

            </div>
        </div>
        </div>
      </div>
  </div>
  <?php } ?>
</body>
</html>
