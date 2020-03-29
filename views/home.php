<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo BASE_URL; ?>">Home</a></li>
		<li class="breadcrumb-item" aria-current="page"><a href="<?php echo BASE_URL; ?>contatos/add">Adicionar</a></li>
	</ol>
</nav>

<br/>
<table class="table table-hover">
	<thead>
    	<tr>
    		<th>ID</th>
    		<th>NOME</th>
    		<th>E-MAIL</th>
    		<th>AÇÕES</th>
    	</tr>
	</thead>
	
<?php foreach ($lista as $item): ?>
	<tbody>
    	<tr>
    		<td><?php echo $item['id']; ?></td>
    		<td><?php echo $item['nome']; ?></td>
    		<td><?php echo $item['email']; ?></td>
    		<td>
    			<a href="<?php echo BASE_URL; ?>contatos/edit/<?php echo $item['id']; ?>">Editar</a>
    			<a href="<?php echo BASE_URL; ?>contatos/del/<?php echo $item['id']; ?>">Excluir</a>
    		</td>
    	</tr>
	</tbody>
<?php endforeach; ?>
	
</table>