<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<img src="maxresdefault (1).jpg">
<style>
img{
	opacity: 80%;
	width: 100%;
	z-index:-1;
	position: absolute;
}
</style>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			 <div class="panel panel-danger">
				  <div class="panel-heading">ADMIN LOGIN</div>
				  <div class="panel-body">LOGIN TO CONTINUE </div>
			</div>
		</div>
    </div>
</div>




	<div class="container">
		<div class="col">
			     <div class="col-sm-6">
					  <div class="panel panel-info">
                      <div class="panel-heading" pos="centre">  Signin Form </div>
						<div class="panel-body">
						<?php
					//	if(isset($_GET['run'])  && $_GET['run']=="failed")
					//	{
					//		echo "Your email or password is not correct";
					//	}
						
						
						?>
							  <form role="form" action="adsign.php" method="post">
								<div class="form-group">
								  <label for="email">Email:</label>
								  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
						  </div>
						  </div>
					  </div>
	</body>
  </html>			 