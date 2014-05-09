<?php defined('SYSPATH') or die('No direct script access.'); ?>

<?php $errores = isset($errores) ? $errores : array(); ?>
<?php echo Form::open('usuario/post/'.$usuario->id); ?>
	<div class='row'>
		<div class='col-xs-12 col-sm-12 col-md-6 col-lg-8'>
			<legend><?php echo ($carrera->id? "Editar" : "Crear nueva"); ?> carrera</legend>	
		</div>
	</div>	
	<div class="form-group">
		<div class= 'row'>
			<div class='col-xs-12 col-sm-12 col-md-6 col-lg-8'>
			<?php echo Form::label('nombre', 'Nombre:'); ?>		
			<?php echo Form::input('nombre', $carrera->nombre, array('class'=>'form-control', 'id'=>'nombre', 'maxlength'=>'30' ,'required')); ?>
			<p class="text-danger"><strong><?php echo Arr::get($errores, 'nombre'); ?></strong></p>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class= 'row'>
			<div class='col-xs-12 col-sm-12 col-md-6 col-lg-8'>
				<?php echo Form::label('descripcion', 'Descripción:'); ?>
				<?php echo Form::textarea('descripcion', $carrera->descripcion, array('class'=>'form-control', 'id'=>'descripcion')); ?>
				<p class="text-danger"><strong><?php echo Arr::get($errores, 'descripcion'); ?></strong></p>
			</div>
		</div>
	</div>
	<?php echo Form::submit("sumbit", "Guardar", array('class'=>'btn btn-success')); ?>
<?php echo Form::close(); ?>