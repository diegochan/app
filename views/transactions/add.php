<form action="<?php echo APP_URL; ?>transactions/add" method="POST">
	
		<p>
			<label for="account_id">Account</label>
		<select name="account_id" class="form-control">
			<?php 
				foreach ($accounts as $account): ?>
					<option value="<?php echo $account["id"]; ?>"><?php echo $account["name"]; ?></option>
			<?php endforeach; ?>
			 ?>
		</select></p>
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
		<label for="category-id">Description</label>
		<input type="text" name="description" class="form-control">
	</p>
	<p>
		<label for="category-id">Date</label>
		<input type="date" name="date" class="form-control">
	</p>
	
	<p>
		<label for="category-id">Amount</label>
		<input type="number" name="amount" class="form-control">
	</p>
	<input type="submit" value="Save" class="btn btn-default">
</form>