<?php
include "users.php";

?>
	<div class="jumbotron">
      <div class="container">
        <h1>Hello, <?php echo $user_name;?>!</h1>
        <p><h2>You can share with your photo</h2></p>
       <?php  include "to_post.php";?>
        
      </div>
    </div>
    
 <div class="container">
      <!-- Example row of columns -->

       <?php

          include "view_post.php";
        ?>
          
      