<h2>Inicio de sesión</h2>

<form action="<?php echo APP_URL; ?>users/login" method="POST">
	<div>
		<p>
			<label for="username">Username: </label>
			<input type="text" name="username" class="form-control" placeholder="Ingresa tu usuario" autofocus>
		</p>
	</div>
	
	<p>
		<label for="password">Passowrd: </label>
		<input type="text" name="password" class="form-control" placeholder="Ingresa tu password">
	</p>
	<p>
		<input type="submit" class="btn btn-success" value="Login">
	</p>
</form>