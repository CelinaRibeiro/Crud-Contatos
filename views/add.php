<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo BASE_URL; ?>">Home</a></li>
		<li class="breadcrumb-item " aria-current="page">Adicionar</li>
	</ol>
</nav>


<div class="container">

<?php if ($error == 'exist'): ?>
	<div class="alert alert-danger" role="alert">
		Email já existente, tente outro.
	</div>
<?php endif; ?>

	<form method="POST" action="<?php echo BASE_URL; ?>contatos/add_save">
		<div class="form-group">
			<label for="nome">Nome: </label> 
			<input type="text" name="nome" id="nome" class="form-control" />
		</div>
		
		<div class="form-group">
			<label for="email">Email: </label> 
			<input type="email" name="email" id="email" class="form-control" />
		</div>
		
		<div class="form-group">
			<input type="submit" value="Adicionar" class="btn btn-secondary">
			<input type="reset" value="Limpar" class="btn btn-secondary"/>
		</div>
		
		<br/>
	</form>
</div>