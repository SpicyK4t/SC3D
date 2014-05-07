<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div class="row">
	<div class='col-xs-12 col-sm-12 col-md-6 col-lg-8'>
		<h1>Carreras</h1> 
		<?php echo HTML::anchor('carrera/nueva', '+ Carrera', array('class'=>'btn btn-primary')); ?>
	</div>
</div>
<br />
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Nombre</th>					
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($carreras as $carrera) : ?>
					<tr>
						<td> <?php echo $carrera->nombre; ?> </td>				
						<td>
							<div class="btn-group">
								<?php echo HTML::anchor("carrera/editar/".$carrera->id, "Editar", array('class'=>'btn btn-info')); ?>
								<?php echo HTML::anchor("carrera/borrar/".$carrera->id, "Borrar", array('class'=>'btn btn-danger')); ?>
							</div>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>			
		</table>
	</div>
</div>
