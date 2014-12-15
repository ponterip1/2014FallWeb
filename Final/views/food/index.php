<? include __DIR__ . '/../views/shared/_Template.php'; ?>



<html>
	
	<body>	
		
		<? include __DIR__ . '/../views/shared/_Template.php'; ?>
		
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
                  <th>Friends</th>
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
                	<td>?=$rs['Friends']?</td>
                	<td>
+					<a title="Edit" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=edit&id=<?=$rs['id']?>">
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
          
          
          <div class="well" ng-controller="social">
          	<button class="btn btn-primary" ng-click="login()">FB Login</button>
          	<br style="clear: both;"/>
          	
          		<img srt="http://graph.facebook.com/{{me.id}}/picture" style="float:left" />
          		<b>{{me.name}}</b><br>
          		{{me.email}}
          </div>
         	
         	
         	
	
		
		<script src="http://platform.fatsecret.com/js?key=XXXXX&auto_load=true"></script>
	
		
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
			
			
			var $socialScope = null;
			app.controller('social', function($scope){
				$socialScope = $scope;
				$scope.login = function(){
					FB.login
				}
			}
			
			
			var $socialScope = null;
			app.controller('social', function($scope){
				$socialScope = $scope;

});


			function checkLoginState() {
				FB.getLoginStatus(function(response) {
					$socialScope.status = response;
					if (response.status === 'connected') {
						FB.api('/me', function(response) {
							$socialScope.me = response;
							$socialScope.$apply();
							console.log(response);
						});
					}
				});
			}
			
			
			
		</script>
		
		
		
		
	</body>	
	</html>