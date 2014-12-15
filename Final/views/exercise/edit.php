	<div class="modal-header">
    		<h4 class="modal-title" id="myModalLabel">Add a Workout</h4>
  		</div>
  		
  		
  		
	<div class="modal-body">	

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
                
                <tr class="exercise_add_input">
                  <td><input type="text" class="form-control" id="Exercise" name = "Name" placeholder="Exercise"  value="<?=$model['Name']?>"></td>
                  <td><input type="text" class="form-control" id="Time/lbs" name = "Time/lbs" placeholder="Time(mins)/lbs"  value="<?=$model['Time/lbs']?>"></td>
                  <td><input type="text" class="form-control" id="Distance" name = "Distance" placeholder="Distance(mi)"  value="<?=$model['Distance']?>"></td>
                  <td><input type="text" class="form-control" id="Reps" name = "Reps" placeholder="Reps(of 15)"  value="<?=$model['Reps']?>"></td>
                  <td><input type="text" class="form-control" id="Calories" name = "CaloriesBurned" placeholder="Calories Burned"  value="<?=$model['CaloriesBurned']?>"></td>
                  <td><input type="text" class="form-control" id="Date" name = "Date" placeholder="Date"  value="<?=date('m/d/Y H:i:s', strtotime( $model['Time'])) ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          
      </div>
      
      
      <div class="modal-footer" id="exercise_add_submit">
		<a href = "exercise.php"><input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"/></a>
		<intput type="submit" name="submit" class="btn btn-primary" value="Submit"/>
	  </div>