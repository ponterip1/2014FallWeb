
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
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
		 	<a href="?action=create"><button type="button" class="btn btn-success toggle-modal" data-target = "#myModal"><span class="glyphicon glyphicon-plus"></span> Add Food</button></a>
		 	<a href="food_remove.php"><button type="button" class="btn btn-default btn-md"><span class="glyphicon glyphicon-minus"></span> Remove Food</button></a>
		 	<a href="food_stats.php"><button type="button" class="btn btn-default btn-md"><span class="glyphicon glyphicon-signal"></span> Stats</button></a>
		 </div>
		 
		 
		 <!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" >
		  <div class="modal-dialog">
		    <div class="modal-content">
		    </div>
		  </div>
		</div>
		
		
		
		
						<!-- Alert -->
				<div class="alert alert-success initialy-hidden" id="myAlert">
					<button type="button" class="close" data-dismiss="alert">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					Your food has been recorded
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
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <? foreach ($model as $rs): ?>
                <tr>
                	<td>?=$rs['Name']?</td>
                	<td>?=$rs['Calories']?</td>
                	<td>?=$rs['Fat']?</td>
                	<td>?=$rs['Carbs']?</td>
                	<td>?=$rs['Fiber']?</td>
                	<td>?=$rs['Protein']?</td>
                	<td>?=$rs['Date']?</td>
                	<td>
					<a title="Edit" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=edit&id=<?=$rs['id']?>">
						<i class="glyphicon glyphicon-pencil"></i>
					</a>
					<a title="Delete" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=delete&id=<?=$rs['id']?>">
						<i class="glyphicon glyphicon-trash"></i>
					</a>
                  	
                  </td>
                	
                </tr>
                <? endforeach; ?>
                  
              </tbody>
            </table>
          </div>
         	


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.4.0/holder.js"></script>
		<script type="text/javascript">
		
			$(function(){
				$("#top-nav").load("inc/_navbar.php", function(){
					$(".food").addClass("active");					
				});
				
				$(".toggle-modal").on('click', function(event){
					event.preventDefault();
					$("#myModal .modal-content").load(this.href + "&format=plain");
					$("#myModal").modal("show");
				})
				$('#myModal').on('hidden.bs.modal', function (e) {
				  		$("#myAlert").show();
				})	
			});
			
		
			$(function(){
				$("#top-nav").load("inc/_navbar.php", function(){
					$(".index").addClass("active");					
				});
			});
		</script>

	</body>	
</html>