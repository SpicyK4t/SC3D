<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="Guillermo Arturo"
		<link rel="shorcut icon" href="<?php echo URL::base(); ?>media/ico/favicon.ico" />
		<meta http-equiv="X-UA-Compatible" content="IE=7,8,9" />

		<title>SC3D - Universidad de Celaya </title>
		
		<?php echo HTML::style('/media/css/bootstrap.min.css', array('rel'=>'stylesheet')); ?>
		<?php echo HTML::style('/media/css/bootstrap-theme.min.css', array('rel'=>'stylesheet')); ?>		
		<?php echo HTML::style('/media/css/app.css', array('rel'=>'stylesheet')); ?>
		

	</head>
	<body>
		<div class="container">
			<?php echo $contenido; ?>
		</div>

		<?php echo HTML::script("/media/js/jquery-1.11.1.min.js"); ?>
		<?php echo HTML::script("/media/js/bootstrap.min.js");  ?>
	</body>
</html>