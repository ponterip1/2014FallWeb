<div class="modal-header">
    <h4 class="modal-title" id="myModalLabel">Add a food</h4>
  </div>
  
  
  	<div class="modal-body">		
	
		
		
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
                </tr>
              </thead>
              <tbody>
                <tr class="add_input">
                  <td><input type="text" class="form-control" id="Name" name = "Name" placeholder="Name"  value="<?=$model['Name']?>"></td>
                  <td><input type="text" class="form-control" id="Calories" name = "Calories" placeholder="Calories"  value="<?=$model['Calories']?>"></td>
                  <td><input type="text" class="form-control" id="Fat" name = "Fat" placeholder="Fat"  value="<?=$model['Fat']?>"></td>
                  <td><input type="text" class="form-control" id="Carbs" name = "Carbs" placeholder="Carbs"  value="<?=$model['Carbs']?>"></td>
                  <td><input type="text" class="form-control" id="Fiber" name = "Fiber" placeholder="Fiber"  value="<?=$model['Fiber']?>"></td>
                  <td><input type="text" class="form-control" id="Protein" name = "Protein" placeholder="Protein"  value="<?=$model['Protein']?>"></td>
                  <td><input type="text" class="form-control" id="Date" name = "Date" placeholder="Date"  value="<?=date('m/d/Y H:i:s', strtotime( $model['Time'])) ?></td>
                  <td><input type="text" class="form-control" id="Friends" name = "Friends" placeholder="Friends" value=<?=$model['Friends']?></td>
                </tr>
              </tbody>
            </table>
          </div>
          
      </div>
          
		
		
          <div class="modal-footer" id="add_submit">
   			<a href = "exercise.php"><input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"/></a>
			<intput type="submit" name="submit" class="btn btn-primary" value="Submit"/>
  		  </div>
		