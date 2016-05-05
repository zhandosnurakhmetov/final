<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
  <form action="to_post.php" method="post">
    <div class="form-group">
      <label for="usr">Title:</label>
      <input type="text" name="title" class="form-control">

      <br><label for="usr">When:</label>
      <div class="row">
          <div class="col-sm-4">
              <select name="day" class="form-control">

                <?php

                  for($i=1;$i<=31;$i++){

                    ?>

                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>

                    <?php

                  }

                ?>
              </select></div>
          <div class="col-sm-4">
              <select name="month"class="form-control">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select></div>
          <div class="col-sm-4">
              <select class="form-control" name="year">
                <option value="2015">2015</option>
                <option value="2016">2016</option>
              </select></div>
      </div>

      <br><label for="usr">Time:</label>
      <div class="row">
          <div class="col-sm-4">
              <select name="time_hour" class="form-control">

                <?php

                  for($i=1;$i<=12;$i++){

                    ?>

                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>

                    <?php

                  }

                ?>
              </select></div>
          <div class="col-sm-4">
              <select name="time_minute"class="form-control">
                <?php

                  for($i=0;$i<=59;$i++){

                    ?>

                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>

                    <?php

                  }

                ?>
              </select></div>
          <div class="col-sm-4">
              <select class="form-control" name="part_of_day">
                <option value="2015">AM</option>
                <option value="2016">PM</option>
              </select></div>
      </div>

      </div>


      <label for="usr">Where:</label>
      <input type="text" class="form-control" name="place">


      <br><div class="row">
        <div class="col-sm-4">  <label for="sel1">How long:</label>
          <select class="form-control" name="time">
            <option value="1">1 hour</option>
            <option value="1.5">1.5 hours</option>
            <option value="2">2 hours</option>
            <option value="2.5">2.5 hours</option>
            <option value="3">3 hours</option>
          </select>
        </div>
        <div class="col-sm-4">  <label for="sel1">NxM</label>
          <select class="form-control" name="vs">
            <option value="5x5">5x5</option>
            <option value="6x6">6x6</option>
            <option value="7x7">7x7</option>
            <option value="8x8">8x8</option>
          </select></div>
        <div class="col-sm-4">  <label for="sel1">Payment per hour:</label>
          <select class="form-control" name="payment">
            <option value="4000">4000</option>
            <option value="5000">5000</option>
            <option value="6000">6000</option>
            <option value="7000">7000</option>
            <option value="8000">8000</option>
            <option value="9000">9000</option>
            <option value="10000">10000</option>
          </select></div>
      </div>

  <br><label for="comment">Comment:</label>
 <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
  <br><input type="submit" name="name" class="btn btn-info" value="Submit">
    </div>

  </form>
</div>

</body>
</html>
