<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration page</title>
  </head>
  <body>

    <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    	<div class="panel-title">Sign Up</div>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" method="post" action="to_register.php">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="surname"  class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="text" name="login"  class="form-control input-sm" placeholder="Login">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="pass1"  class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="pass2"class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>

                <div class="form-group">
			    				<input type="number" name="age"  class="form-control input-sm" placeholder="Age">
			    			</div>

                <div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="university" class="form-control input-sm" placeholder="University">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="course"  class="form-control input-sm" placeholder="Course">
			    					</div>
			    				</div>
			    			</div>

                <div class="form-group">
                  <input type="text" name="team"  class="form-control input-sm" placeholder="Team">
                </div>

			    			<input type="submit" value="REGISTER" class="btn btn-info btn-block">

			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

  </body>
</html>
