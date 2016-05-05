
<?php
		include="db.php";
		include="users.php";
?>
<br><br><br><br><br>
 <div class="col-md-4">
          <form class="form-signin" action="to_set.php" method="POST">
                <h2 class="form-signin-heading">Please sign up</h2>

                <label  class="sr-only" >Name</label>                
                <input type="text" name="user_name" class="form-control" placeholder="<?php echo $user_name;?>" required autofocus>

                 <label  class="sr-only">Login</label>
               
                <input type="text" name="login" class="form-control" placeholder="<?php echo $login;?>" required autofocus>
                <label class="sr-only">Password</label>
               
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
          <a href="deactivate_account.php">Deactivate account</a>
      </div>
        <div class="col-md-4">
        
        </div>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
