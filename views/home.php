<table border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>NOME</th>
		<th>E-MAIL</th>
		<th>AÇÕES</th>
	</tr>
	
<?php foreach ($lista as $item): ?>
	<tr>
		<th><?php echo $item['id']; ?></th>
		<th><?php echo $item['nome']; ?></th>
		<th><?php echo $item['email']; ?></th>
		<th></th>
	</tr>
<?php endforeach; ?>
	
	
</table>