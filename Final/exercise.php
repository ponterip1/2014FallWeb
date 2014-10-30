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
		
		
		<div class="exercise_description">
			<h1>Exercise Tracker</h1>
			<p>This is where you'll list all the exercises you have done to track your workouts</p>
		</div>
		
		
		<div class="exerciseButtons">
		 	<a href="exercise_add.php"><button type="button" class="btn btn-default btn-md"><span class="glyphicon glyphicon-plus"></span> Add Workout</button></a>
		 	<a href="exercise_remove.php"><button type="button" class="btn btn-default btn-md"><span class="glyphicon glyphicon-minus"></span> Remove Workout</button></a>
		 	<a href="caloriecalculator.php"><button type="button" class="btn btn-default btn-md"><span class="glyphicon glyphicon-wrench"></span> Calorie Calculator</button></a>
		 </div>
		
		<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Exercise</th>
                  <th>Time(mins)/lbs</th>
                  <th>Distance(mi)</th>
                  <th>Reps(of 15)</th>
                  <th>Calories Burned</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Bench Press</td>
                  <td>200</td>
                  <td>~</td>
                  <td>1</td>
                  <td>250</td>
                  <td>Mon 12:00 pm</td>
                </tr>
                <tr>
                  <td>Elliptical</td>
                  <td>60</td>
                  <td>4</td>
                  <td>~</td>
                  <td>300</td>
                  <td>Mon 12:00 pm</td>
                </tr>
                <tr>
                  <td>Bench Press</td>
                  <td>200</td>
                  <td>~</td>
                  <td>1</td>
                  <td>250</td>
                  <td>Mon 12:00 pm</td>
                </tr>
                <tr>
                  <td>Elliptical</td>
                  <td>60</td>
                  <td>4</td>
                  <td>~</td>
                  <td>300</td>
                  <td>Mon 12:00 pm</td>
                </tr>
                <tr>
                  <td>Bench Press</td>
                  <td>200</td>
                  <td>~</td>
                  <td>1</td>
                  <td>250</td>
                  <td>Mon 12:00 pm</td>
                </tr>
                <tr>
                  <td>Elliptical</td>
                  <td>60</td>
                  <td>4</td>
                  <td>~</td>
                  <td>300</td>
                  <td>Mon 12:00 pm</td>
                </tr>
              </tbody>
            </table>
          </div>
		
		
		
	</body>	
</html>