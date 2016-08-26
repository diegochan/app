<div class="row">
	<div class="col-sm-11"><h3>Accounts</h3></div>
	<div class="col-md-1"><a href="<?php echo APP_URL; ?>accounts/add"><spam class="glyphicon glyphicon-plus"></spam></a></div>
</div>
<table class="table">
	<tr>
		<th>ID</th>
		<th>User</th>
		<th>Name</th>
		<th>Action</th>
	</tr>
	<?php foreach ($account as $account) : ?>
		<tr>
			<td><?php echo $account['0']; ?></td>
			<td><?php echo $account['1']; ?></td>
			<td><?php echo $account['2']; ?></td>
			<td>
				<a href="<?php echo APP_URL;?>accounts/edit/<?php echo $account['0']; ?>"><spam class="glyphicon glyphicon-edit"></spam></a> |
				<a href="<?php echo APP_URL;?>accounts/delete/?id=<?php echo $account['0']; ?>"><spam class="glyphicon glyphicon-trash"></spam></a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>