<div class="row">
	<div class="col-sm-11"><h3>Users</h3></div>
	<div class="col-md-1"><a href="<?php echo APP_URL; ?>users/add"><spam class="glyphicon glyphicon-plus"></spam></a></div>
</div>
<h2>Listado de usuarios</h2>

<table class="table">
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Password</th>
		<th>Action</th>
	</tr>
	<?php foreach ($users as $user) : ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td>
				<a href="<?php echo APP_URL;?>users/edit/<?php echo $user['id']; ?>"><spam class="glyphicon glyphicon-edit"></spam></a> |
				<a href="<?php echo APP_URL;?>users/delete/?id=<?php echo $user['id']; ?>"><spam class="glyphicon glyphicon-trash"></spam></a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>