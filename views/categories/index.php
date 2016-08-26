<div class="row">
	<div class="col-sm-11"><h3>Categories</h3></div>
	<div class="col-md-1"><a href="<?php echo APP_URL; ?>categories/add"><spam class="glyphicon glyphicon-plus"></spam></a></div>
</div>
<?php if (!empty($categories)): ?>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Action</th>
		</tr>
<?php foreach ($categories as $category): ?>
		<tr>
			<td><?php echo $category['id']; ?></td>
			<td><?php echo $category['name']; ?></td>
			<td>
				<a href="<?php echo APP_URL; ?>categories/edit/<?php echo $category["id"]; ?>"><spam class="glyphicon glyphicon-edit"></spam></a>|
				<a href="<?php echo APP_URL; ?>categories/delete/?id=<?php echo $category["id"]; ?>"><spam class="glyphicon glyphicon-trash"></spam></a>
			</td>
		</tr>
		<?php endforeach ?>
	</table>

<?php endif ?>