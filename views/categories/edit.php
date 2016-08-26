<form action="<?php echo APP_URL; ?>categories/edit " method="POST">
 	<input type="hidden" name="id" value="<?php echo $category['id']; ?>">
 	<p>
 		<label for="new_category">Category: </label>
 		<input type="text" class="form-control" name="new_category">
 	</p>
 	<p>
 		<input type="submit" class="btn btn-success" value="Update">
 	</p>
 </form>