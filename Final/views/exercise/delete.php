<form class="form-horizontal" action="?action=delete" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title" id="myModalLabel">Delete an exercise</h4>
  </div>
  	<div class="modal-body">
  		
  		<h5>Are you sure you want to delete <?=$model['Name']?> from <?=$model['Time']?>?</h5>
  		
  		
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
  		
  	</div>
	<div class="modal-footer">
		<input type="hidden" name="id" value="<?=$model['id']?>" />
		<a href="exercise.php">< input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" /></a>
		<input type="submit" name="submit" class="btn btn-primary" value="Submit" />
	</div>
</form>