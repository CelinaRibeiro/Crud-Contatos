<html>
<head>
	<meta charset="UTF-8"/>
	<title>Crud OO MVC</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
</head>


<body>
	<header>
		<h1>SYS CONTATOS</h1>
	</header>
	<section>
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</section>
	<footer>
		<h6>Todos os direitos reservados</h6>
	</footer>
	

	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>

</html>
