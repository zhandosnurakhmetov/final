<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php

  $sql_text = "SELECT * FROM friends
              WHERE uid = ".$_SESSION['user_id']."
              ";
  $query = $connection->query($sql_text);



  while($row = $query->fetch_object()){

    $sql_text2 = "SELECT * FROM users
              WHERE id = $row->fid ";

              $query2 = $connection->query($sql_text2);

              while($row2 = $query2->fetch_object()){
?>
            <hr style="margin-left:12%; margin-right:25%;"><div class="container">
                <div class="row" style="margin-left:10%;">
        						<div class="col-sm-7">
        							<div class="">
                        <h4><?php echo $row2->name." ".$row2->surname." ";?></h4>
                        <h5>Team: <?php echo $row2->team ;?>|University:<?php echo $row2->university;?></h5>
        							</div>

        						</div>
        						<div class="col-sm-2" style="border-left:0.5px solid #d3d3d3;height:40px">

        							<center>
                        <form action=" final_project/../delete.php" method="post">
                            <input type="submit" class="btn btn-info btn-xs" value="Delete" style="margin-left:3%;"></a></div>
                            <input type = "hidden" value = "<?php echo $row->id?> " name = "id">
                        </form>
        							</center>
        						</div>
        					</div>
        				</div>

                <?php

              }



  }

 ?>
