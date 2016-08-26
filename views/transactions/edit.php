<form action="<?php echo APP_URL; ?>transactions/edit" method="POST">
 	<input type="hidden" name="id" value="<?php echo $transaction['id']; ?>">
 	<p>
 		<label for="description">Description: </label>
 		<input type="text" class="form-control" name="description">
 	</p>
 	<p>
 		<label for="date">Date: </label>
 		<input type="date" class="form-control" name="date">
 	</p>
 	<p>
 		<label for="date">Amount: </label>
 		<input type="text" class="form-control" name="amount">
 	</p>
 	<p>
		<label for="category-id">Category</label>
		<select name="category_id" class="form-control">
			<?php 
				foreach ($categories as $category): ?>
					<option value="<?php echo $category["id"]; ?>"><?php echo $category["name"]; ?></option>
			<?php endforeach; ?>
				?>
		</select>
	</p>
 	<p>
 		<input type="submit" class="btn btn-success" value="Update">
 	</p>
 </form>