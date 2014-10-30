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
		
		
		
		<h1 class="food_add_heading">Add Food</h1>
		
		
		
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
                <tr class="add_input">
                  <td><input type="text" class="form-control" id="Name" placeholder="Name"></td>
                  <td><input type="text" class="form-control" id="Calories" placeholder="Calories"></td>
                  <td><input type="text" class="form-control" id="Fat" placeholder="Fat"></td>
                  <td><input type="text" class="form-control" id="Carbs" placeholder="Carbs"></td>
                  <td><input type="text" class="form-control" id="Fiber" placeholder="Fiber"></td>
                  <td><input type="text" class="form-control" id="Protein" placeholder="Protein"></td>
                  <td><input type="text" class="form-control" id="Date" placeholder="Date"></td>
                </tr>
              </tbody>
            </table>
          </div>
		
		
		<div class="add_submit">
    		<button type="button" class="btn btn-primary">Submit</button>
   		 	<a href= "food.php"><button type="button" class="btn btn-default">Cancel</button></a>
  		</div>














	</body>	
</html>