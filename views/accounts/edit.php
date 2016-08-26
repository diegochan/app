<form action="<?php echo APP_URL; ?>accounts/edit" method="POST">
 	<input type="hidden" name="id" value="<?php echo $account['id']; ?>">
 	<p>
		<label for="user_id">ID_User: </label>
		<select name="user_id" class="form-control">
			<?php 
				foreach ($users as $user): ?>
					<option value="<?php echo $user["id"]; ?>"><?php echo $user["username"]; ?></option>
			<?php endforeach; ?>
				?>
		</select>
	</p>
 	<p>
		<label for="name">Name: </label>
		<input type="text" name="name" class="form-control" value="<?php echo $account["name"]; ?>">
	</p>
 	<p>
 		<input type="submit" class="btn btn-success" value="Update">
 	</p>
 </form>