	<!DOCTYPE html>
	
	<html lang="en">
	<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	</head>
	<body>
<br>
<br>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
				  <div class="panel-heading"><h2>Free Web Practice</h2></div>
				  <div class="panel-body">Practce free online for JAMB, WAEC, SAT, ACCA, CCNA, CCNP, etc.</div>
				</div>
			</div>
		</div>
    </div>
	
	
	<br>
<br>

		<div class="container">
			<div class="row">
	<div class="col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading"><h3>Signin Form</h3></div>
			<div class="panel-body">
			
			<h4><Strong>
			<?php
			if(isset($_GET['run']) && $_GET['run']=="failed"){
				echo "<mark>Invalid email or password</mark>";
			}
			?>
			</strong></h4>
			
				<form role="form" action="signin_sub.php" method="post">
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" name="e" id="email" placeholder="Enter email" name="email">
					</div>
						<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" name="pw" id="pwd" placeholder="Enter password" name="pwd">
					</div>    
				<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>
	
	

	<div class = "col-sm-6">
		<div class="panel panel-primary">
			<div class = "panel-heading"><h3>Signup Form</h3></div>
				<div class = "panel-body">
				
				<h4><Strong>
				<?php 
						if(isset($_GET['run']) && $_GET['run']=="success"){
						echo "<mark>Congratulations!  Your signup was successful</mark>";
					}
				?>
				</h4></Strong>
				
					<form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data">
						<div class="form-group">
							<label for="name">Full Name:</label>
							<input type="text" class="form-control" name="n" id="name" placeholder="Enter your fullname">
						</div>
						<div class="form-group">
							<label for="phone">Phone Number:</label>
							<input type="number" class="form-control" name="pn" id="phone" placeholder="Phone Number" >
						</div>
						
						<div class="form-group">
							<label for="country">Country:</label>
							<input type="text" class="form-control" name="c" id="country" placeholder="Enter your Country">
						</div>
						
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" class="form-control" name="e" id="email" placeholder="Enter email" >
						</div>
						
						<div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" name="pw" id="pwd" placeholder="Enter password" >
						</div>    
						
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>



	</div>
	</div>
	</div>


	</body>
	</html>
