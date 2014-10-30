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
		
		
		<h1 class="exercise_remove_heading">Remove Workout</h1>
		
		
		
		<div class="table-responsive">
            <table class="table table-hover">
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
		
		
		<div class="exercise_remove_remove">
    		<button type="button" class="btn btn-primary">Remove</button>
   		 	<a href="exercise.php"><button type="button" class="btn btn-default">Cancel</button></a>
  		</div>
	
		
		
		
	</body>	
</html>