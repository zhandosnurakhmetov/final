
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <?php

      include 'init/db.php';
      include 'scripts/search_friends.php';
      $text = $_POST['text'];

      $sql_text = "SELECT * FROM users
                    WHERE  name LIKE \""."%".$text."%"."\" OR surname LIKE \""."%".$text."%"."\" OR team LIKE \""."%".$text."%"."\"
      ";

      $query = $connection->query($sql_text);
      $i = 1;
      while ($row=$query->fetch_object()) {

  ?>



      <hr style="margin-left:12%; margin-right:25%;"><div class="container">
        <div class="row" style="margin-left:10%;">
						<div class="col-sm-7">
							<div class="col-sm-6">
								<h4><span id="name<?php echo $i;?>"><?php echo $row->name." ".$row->surname; ?></span></h4>
                <h5>Team:<?php echo $row->team."|University:".$row->university ?></h5>
							</div>
              <div class="col-sm-1">
                  <br><div id = "evaluate<?php echo $i;?>" style="display:none;"><form action="calculation.php" method="post">
                  <select name = "ball">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                  <input type="hidden" name="user_id" value="<?php echo $row->id;?>">
                  <input type="submit" name="name" class = "btn btn-info btn-xs" value="Evaluate"></form>
              </div></div>

						</div>
						<div class="col-sm-2" style="border-left:0.5px solid #d3d3d3;height:40px">

							<center>
                <form action="to_add_friends.php" method = "post">
                  <div>
                    <br><input type="submit" class="btn btn-info btn-xs" value="Add as friend" style="margin-left:3%;"></a>
                    <input type = "hidden" value = "<?php echo $row->id?> " name = "id_for_adding">
                  </div>
                </form>
							</center>
						</div>
					</div>
				</div>

  <?php   $i++; }

 ?>
