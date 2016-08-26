<form action="<?php echo APP_URL; ?>users/edit " method="POST">
 	<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
 	<input type="hidden" name="edit">
 	<p>
 		<label for="username">Username: </label>
 		<input type="text" name="username" class="form-control" value="<?php echo $user['username']; ?>">
 	</p>
 	<p>
 		<label for="username">Password: </label>
 		<input type="password" class="form-control" name="new_password">
 	</p>
 	<p>
	 	<label for="rol">Rol: </label>
	 	<input type="text" name="rol" class="form-control" value="<?php echo $user['rol']; ?>">
 	</p>
 	<p>
 		<input type="submit" class="btn btn-success" value="Update">
 	</p>
 </form>