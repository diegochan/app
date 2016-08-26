<form action="<?php echo APP_URL; ?>users/add" method="POST">
	<p>
		<label for="username">Username: </label>
		<input type="text" name="username" class="form-control" placeholder="Username">
	</p>
	<p>
		<label for="password">Password</label>
		<input type="password" name="password" class="form-control" placeholder="Password">
	</p>
	<p>
		<label for="rol">Rol</label>
		<input type="text" name="rol" class="form-control" placeholder="Rol">
	</p>
	<p>
		<input type="submit" class="btn btn-success" value="Save">
	</p>
</form>