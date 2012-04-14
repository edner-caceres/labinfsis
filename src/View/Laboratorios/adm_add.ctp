<div class="laboratorios form">
<?php echo $this->Form->create('Laboratorio');?>
	<fieldset>
		<legend><?php echo __('Adm Add Laboratorio'); ?></legend>
	<?php
		echo $this->Form->input('nombre_laboratorio');
		echo $this->Form->input('numero_de_equipos');
		echo $this->Form->input('descripcion_laboratorio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Laboratorios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Asignaciones'), array('controller' => 'asignaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignacion'), array('controller' => 'asignaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
