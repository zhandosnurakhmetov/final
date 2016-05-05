          <!DOCTYPE html>
          <html>
          	<head>
          		<meta charset="utf-8">
          		<title></title>
          		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
          		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
          		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

          	</head>
          	<body>
          		<?php
              $id = $_SESSION['user_id'];

              $sql_text = "SELECT * FROM posts
              WHERE uid = $id
              ORDER BY id desc";
              $query = $connection->query($sql_text);
          				$o=1;
          				while($row=$query->fetch_object()){



          	?>

          				<div class="container">
          					<div class="row">
          						<div class="col-sm-7">
          							<div  style="margin-left:2%;"><hr>

          									<b><?php echo $row->day." ".$row->month." ".$row->year?>,</b>
          									<?php echo $row->time_hour." : ".$row->time_minute." ". $row->part_of_day;?>,
          	 							 	<?php echo $row->place;?>,
          	 								<?php echo $row->time;?>hours,
          	 								we will play <?php echo $row->vs;?>
          		 							and pitch costs <?php echo $row->payment;?> tenge per hour

          							</div>

          						</div>
          						<div class="col-sm-2">

          					    <br><center style="margin-right:2%;"><span id = "star<?php echo $o;?>" class="glyphicon glyphicon-star"></span><br>

          								<form action="tocomment_my.php" method="post">
                            <input type="submit" name="submit" class="btn btn-info" value="Comment">
                            <input type="hidden" name="post_id" id = "postid<?php echo $o;?>" value="<?php echo $row->id;?>">
                          </form>
          							</center>
          						</div>
          					</div>
          				</div>


          <?php

          				$o++;

          				}


          		?>
          	</body>
          </html>
