


	
	<body>	
		
		
		
		
		<div class="exercise_description">
			<h1>Exercise Tracker</h1>
			<p>This is where you'll list all the exercises you have done to track your workouts</p>
		</div>
		
		
		<div class="exerciseButtons">
		 	<a href="?action=create"><button type="button" class="btn btn-success toggle-modal"  data-target = "#myModal"><span class="glyphicon glyphicon-plus"></span> Add Workout</button></a>
		 	<a href="exercise_remove.php"><button type="button" class="btn btn-default btn-md"><span class="glyphicon glyphicon-minus"></span> Remove Workout</button></a>
		 	<a href="caloriecalculator.php"><button type="button" class="btn btn-default btn-md"><span class="glyphicon glyphicon-wrench"></span> Calorie Calculator</button></a>
		 </div>
		 
		 
		  <!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" >
		  <div class="modal-dialog">
		    <div class="modal-content">
		    </div>
		  </div>
		</div>
		
		
				<
		
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
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <? foreach ($model as $rs): ?>
                <tr>
                	<td>?=$rs['Name']?</td>
                	<td>?=$rs['Time/lbs']?</td>
                	<td>?=$rs['Distance']?</td>
                	<td>?=$rs['Reps']?</td>
                	<td>?=$rs['CaloriesBurned']?</td>
                	<td>?=$rs['Date']?</td>
                	<td>
+					<a title="Edit" class="btn btn-default btn-sm toggle-modal"  data-target="#myModal" href="?action=edit&id=<?=$rs['id']?>">
+						<i class="glyphicon glyphicon-pencil"></i>
+					</a>
					<a title="Delete" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=delete&id=<?=$rs['id']?>">
+						<i class="glyphicon glyphicon-trash"></i>
+					</a>
+                  	
+                  </td>
                	
                </tr>
                <? endforeach; ?>
              </tbody>
            </table>
          </div>
		
		
		
		
		<script type="text/javascript">
			$(function(){
				$(".exercise").addClass("active");
				
				$(".toggle-modal").on('click', function(event){
					event.preventDefault();
					$("#myModal .modal-content").load(this.href + "&format=plain");
					$("#myModal").modal("show");
				})
					
			});
			
		</script>
		
	</body>	
</html>