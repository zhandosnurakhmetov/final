<?php

include "db.php";
include "users.php";

$sql_txt="SElect * from images where active=1 order by post_date DESC ";

$query=$connection->query($sql_txt);

while ($row=$query->fetch_object()) {


	$url=$row->image_url;
	?>
		

      <form class="navbar-form " action="post_delete.php"  method="POST">
			  <div class="form-group">
			    		<div class="row">
        	
          	<table class="table table-striped">
			    <td>	
			    	<tr><img alt="Brand" src="<?php echo $url;?>"></tr>
			    	<p>
			    	<tr>
			    	<?php
			    		if($row->uid==$_SESSION['user_id']){
			    			?>
			    			<button type="submit" class="btn btn-danger " name="image_id" value="<?php echo $row->id;?>">Delete</button>
			    			<?php
			    		}

			    	?>
			    	</tr>
			    	</p>
			    </td>
			    


			    

			    			  </table>
        		

          
      </div>
			  </div>
			</form>

			  
	<?php
}

?>