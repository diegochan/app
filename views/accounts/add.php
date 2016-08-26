<form action="<?php echo APP_URL; ?>accounts/add" method="POST">
	
	<p>
	<label for="user_id">Account</label>
	<select name="user_id" class="form-control">
		<?php 
			foreach ($users as $user): ?>
			<option value="<?php echo $user["id"]; ?>"><?php echo $user["username"]; ?></option>
			<?php endforeach; ?>
		?>
	</select>
	</p>
	<p>
		<label for="name">Name</label>
		<input type="text" name="name" class="form-control">
	</p>
	<input type="submit" value="Save" class="btn btn-default">
</form>