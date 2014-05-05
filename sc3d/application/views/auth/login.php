<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo Form::open('/login/index/', array('class'=>'form-signin', 'role'=>'form')); ?>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
			<h2 class="form-signin-heading">Inicio de Sesi&oacute;n</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
			<?php echo Form::input('username', HTML::chars(Arr::get($_POST, 'username')), array('placeholder'=>"Nombre de Usuario", 'class'=>'form-control' ,"required", "autofocus")); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
			<?php echo Form::password('password', NULL, array('class'=>'form-control', 'placeholder'=>'Contraseña', 'required')); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
			<label class="checkbox">
				<?php echo Form::checkbox("remember-me"); ?>Recuerdame
			</label>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
			<button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
		</div>
	</div>
<?php echo Form::close(); ?>