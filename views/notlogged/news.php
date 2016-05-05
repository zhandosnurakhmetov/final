<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<?php
			include 'scripts/news.php';
		?>
	</head>
	<body>
		<?php for($i=1;$i<=10;$i++){ ?>

			<div id = "test"<?php echo $i." "; ?>>

			<div>

		<?php } ?>
		<?php

					$sql_text = "select posts.id,posts.day,posts.month,posts.year,posts.time_hour,posts.time_minute,posts.part_of_day,posts.place,posts.time,posts.vs,posts.payment,
					users.name,  users.university, users.surname,users.age,users.university,users.course,users.team
																			from posts
																			inner join users
																			on posts.uid=users.id";

				$query = $connection->query($sql_text);
				$i=1;$o=1;
				while($row=$query->fetch_object()){



	?>

		<hr style="margin-left:12%; margin-right:25%;"><div class="container">
				<div class="row" style="margin-left:10%;">
						<div class="col-sm-7">
							<div class="">
								<h4><span id="name<?php echo $o;?>"><?php echo $row->name." ".$row->surname; ?></span></h4>
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

							<center><a href="?page=login"><span id = "star<?php echo $o;?>" class="glyphicon glyphicon-star"></span></a><br><br>
								<input type="hidden" name="id" id = "postid<?php echo $o;?>" value="<?php echo $row->id;?>">
								<a href="?page=login" class="btn btn-info">Comment</a>
							</center>
						</div>
					</div>
				</div>


<?php

				$o++;
				$i++;

				}


		?>
	</body>
</html>
