<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#show").click(function(){
        $("info").hide("slow");
    });
});
</script>
</head>
<body>
<p>
  gjgf
</p>
  <?php include 'init/db.php';

        $sql_text = "select posts.day, users.name, users.id, users.university
                                    from posts
                                    inner join users
                                    on posts.uid=users.id";

      $query = $connection->query($sql_text);
      while($row=$query->fetch_object()){
        ?>
          <div id="info">
            <?php echo $row->name; ?>
          </div>
        <?php
      }
        ?>


<button id="show">Show</button>

</body>
</html>
