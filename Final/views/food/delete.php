<form class="form-horizontal" action="?action=delete" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title" id="myModalLabel">Delete a food</h4>
  </div>
  	<div class="modal-body">
  		
  		<h5>Are you sure you want to delete <?=$model['Name']?> from <?=$model['Time']?>?</h5>
  		
  	</div>
	<div class="modal-footer">
		<input type="hidden" name="id" value="<?=$model['id']?>" />
		<a href="food.php">< input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" /></a>
		<input type="submit" name="submit" class="btn btn-primary" value="Submit" />
	</div>
</form>