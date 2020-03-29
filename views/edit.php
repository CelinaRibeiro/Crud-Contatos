<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo BASE_URL; ?>">Home</a></li>
		<li class="breadcrumb-item " aria-current="page">Editar</li>
	</ol>
</nav>

<div class="container">

	<form method="POST">
		
		<div class="form-group row">
			<label for="email" class="col-sm-1 col-form-label">Email:</label>
			<div class="col-sm-11">
				<input type="text" readonly class="form-control-plaintext" name="email" disabled="disabled"  value="<?php echo $info['email']; ?>" class="form-control"/>
			</div>
		</div>
		
		<div class="form-group row">	
			<label for="nome" class="col-sm-1 col-form-label">Nome:</label>
			<div class="col-sm-11">
				<input type="text" name="nome" value="<?php echo $info['nome']; ?>" class="form-control"/>
			</div>
		</div>
		
		<div class="form-group">
			<input type="submit" value="Salvar" class="btn btn-secondary"/>
		</div>
	</form>

</div>