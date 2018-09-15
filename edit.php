<?php

foreach ($fetch_data as $data) {
$reg_id = $data->reg_id;
	$fname = $data->reg_fname;
		$lname = $data->reg_lname;
			$reg_email = $data->reg_email;
				
	# code...
}

 ?>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
body{
    background-color: #525252;
}
.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>
</head>
<body>
	<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    	
			 			</div>
			 			<div class="panel-body">
			 				

			 							 			
			    		<form role="form" method="post" >

			    			<input type="text" name = "reg_id" value="<?php echo $reg_id ?>">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" value="<?php echo $fname ?>" >
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" value="<?php echo $lname ?>">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" value="<?php echo $reg_email ?>">
			    			</div>

			    		
			    			
			    			<input type="submit" value="Update" name="update" class="btn btn-info btn-block">
			    		
			    		</form>

			    		
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
</body>
</html>


