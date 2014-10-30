<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Fitness Tracker Home Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link type= "text/css" rel= "stylesheet" href= "CSS/main.css"  />
	</head>
	
	<body>	
		
		<div id= "wrapper">
			<ul class= "navbar">
				<li><a href= "index.php">Home</a></li>
				<li><a href= "food.php">Food</a></li>
				<li><a href= "exercise.php">Exercise</a></li>
				<li><a href= "apps.php">Apps</a></li>
				<li><a href= "blogs.php">Blogs</a></li>
				<li><a href= "profile.php">Profile</a></li>
			</ul>
		</div>
		
		
		<h1 class="login_heading">Log-In</h1>
		
		
		<form class="form-horizontal" role="form">
  			<div class="form-group">
    			<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    			<div class="col-sm-10">
      				<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    			</div>
  			</div>
  			<div class="form-group">
    			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
  					<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
				</div>
  			</div>
  			<div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      				<div class="checkbox">
        				<label>
          					<input type="checkbox"> Remember me
        				</label>
      				</div>
    			</div>
  			</div>
			<div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
  					<button type="submit" class="btn btn-default">Sign in</button>
    			</div>
  			</div>
		</form>



	</body>	
</html>