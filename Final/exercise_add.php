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
		
		<h1 class="exercise_add_heading">Add Workout</h1>
		
		
		
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
                <tr class="exercise_add_input">
                  <td><input type="text" class="form-control" id="Exercise" placeholder="Exercise"></td>
                  <td><input type="text" class="form-control" id="Time/lbs" placeholder="Time(mins)/lbs"></td>
                  <td><input type="text" class="form-control" id="Distance" placeholder="Distance(mi)"></td>
                  <td><input type="text" class="form-control" id="Reps" placeholder="Reps(of 15)"></td>
                  <td><input type="text" class="form-control" id="Calories" placeholder="Calories Burned"></td>
                  <td><input type="text" class="form-control" id="Date" placeholder="Date"></td>
                </tr>
              </tbody>
            </table>
          </div>
		
		
		<div class="exercise_add_submit">
    		<button type="button" class="btn btn-primary">Submit</button>
   		 	<a href= "exercise.php"><button type="button" class="btn btn-default">Cancel</button></a>
  		</div>
	
	</body>	
</html>