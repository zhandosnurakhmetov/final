<?php
  include 'css/comments.php';
  $post_id= $_POST['post_id'];


  $sql_text = "SELECT comments.text, posts.id, users.id, users.name
                FROM comments
                JOIN posts ON comments.pid = $post_id
                JOIN users ON users.id = comments.uid
                HAVING posts.id = $post_id
  ";

  $query = $connection->query($sql_text);

  while($row=$query->fetch_object()){

 ?>

 <div class="container">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1" id="logout">
        <div class="page-header">
        </div>
        <div class="comment-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="comments-logout">
                    <ul class="media-list">
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews"><?php echo $row->name;?></h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li>
                              </ul>
                              <p class="media-comment">
                                 <?php echo $row->text; ?>
                              </p>
                              <form class="" action="?page=reply" method="post">
                                <button class="btn btn-info btn-circle text-uppercase" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</button>
                                <input type="hidden" name="id" value="<?php echo $row->id;?>">
                                <input type="hidden" name="posts.id" value="<?php echo $post_id; ?>">
                              </form>
                          </div>
                        </div>

                      </li>


                      </li>
                    </ul>
                </div>
                <div class="tab-pane" id="add-comment">
                    <form action="to_add_comments.php" method="post" class="form-horizontal" id="commentForm" role="form">
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
                </div>

            </div>
        </div>
	</div>
</div></div>
<?php } ?>



<form action="to_add_comments.php" method="post" class="form-horizontal" id="commentForm" role="form">
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
