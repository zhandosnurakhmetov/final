<?php

    if ($_SERVER['REQUEST_METHOD']=='POST') {
      $id = $_POST['id'];
      $id2 = $_POST['posts.id'];
      echo $id2;
?>


      <form action="" method="post" class="form-horizontal" id="commentForm" role="form">
          <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Comment</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="text" id="addComment" rows="5"></textarea>
              </div>
          </div>

          <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                  <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
                  <input type="hidden" name="post_id" value="<?php echo $post_id;?>">
              </div>
          </div>
      </form>
<?
    }

 ?>
