<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign IN</title>
  </head>
  <body>

    <!-- <div class="container">
  <form class="form-horizontal" role="form" action="login_check.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-5" for="email">Login:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="login" name = "login" placeholder="Enter login">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-5" for="pwd">Password:</label>
      <div class="col-sm-3">
        <input type="password" class="form-control" id="pwd" name = "password" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-5 col-sm-5">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-5 col-sm-5">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div> -->

<div class="container">
    <div style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                </div>

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" class="alert alert-danger col-sm-12"></div>

                    <form class="form-horizontal" role="form" action="login_check.php" method="post">

                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-username" type="text" class="form-control" name="login" value="" placeholder="Login">
                                </div>

                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                </div>





                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                  <input type="submit" class="btn btn-info" value="Login"><i class="icon-hand-right"></i>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>



    <!-- <form class="" action="login_check.php" method="post">
      <table>
        <tr>
          <td>
            Login:
          </td>
          <td>
            <input type="text" name="login" placeholder="Enter your login">
          </td>
        </tr>
        <tr>
          <td>
            Password:
          </td>
          <td>
            <input type="password" name="password" placeholder="Enter your password">
          </td>
        </tr>
        <td>

            <input type="submit" value="Login">

        </td>
      </table>
    </form> -->
  </body>
</html>
