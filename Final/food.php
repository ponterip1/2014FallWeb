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
		
		
		<div class="foodDescription">
			<h1>Food Tracker</h1>
			<p>This is where you'll list all the foods you have eaten to track their nutritional contents</p>
		</div>
		
		
		 
		 <div class="foodButtons">
		 	<a href="food_add.php"><button type="button" class="btn btn-default btn-md"><span class="glyphicon glyphicon-plus"></span> Add Food</button></a>
		 	<a href="food_remove.php"><button type="button" class="btn btn-default btn-md"><span class="glyphicon glyphicon-minus"></span> Remove Food</button></a>
		 	<a href="food_stats.php"><button type="button" class="btn btn-default btn-md"><span class="glyphicon glyphicon-signal"></span> Stats</button></a>
		 </div>
		 
		 
		 
		 
		 <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Calories</th>
                  <th>Fat (g)</th>
                  <th>Carbs (g)</th>
                  <th>Fiber (g)</th>
                  <th>Protien (g)</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Food1</td>
                  <td>100</td>
                  <td>20.0</td>
                  <td>9.0</td>
                  <td>1.0</td>
                  <td>6.0</td>
                  <td>Mon 12:00 pm</td>
                </tr>
                <tr>
                  <td>Food1</td>
                  <td>100</td>
                  <td>20.0</td>
                  <td>9.0</td>
                  <td>1.0</td>
                  <td>6.0</td>
                  <td>Mon 12:00 pm</td>
                </tr>
                <tr>
                  <td>Food1</td>
                  <td>100</td>
                  <td>20.0</td>
                  <td>9.0</td>
                  <td>1.0</td>
                  <td>6.0</td>
                  <td>Mon 12:00 pm</td>
                </tr>
                <tr>
                  <td>Food1</td>
                  <td>100</td>
                  <td>20.0</td>
                  <td>9.0</td>
                  <td>1.0</td>
                  <td>6.0</td>
                  <td>Mon 12:00 pm</td>
                </tr>
                <tr>
                  <td>Food1</td>
                  <td>100</td>
                  <td>20.0</td>
                  <td>9.0</td>
                  <td>1.0</td>
                  <td>6.0</td>
                  <td>Mon 12:00 pm</td>
                </tr>
              </tbody>
            </table>
          </div>
         	
		
	</body>	
</html>