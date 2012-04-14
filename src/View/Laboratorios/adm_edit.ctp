<div class="laboratorios form">
<?php echo $this->Form->create('Laboratorio');?>
	<fieldset>
		<legend><?php echo __('Adm Edit Laboratorio'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Laboratorio.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Laboratorio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Laboratorios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Asignaciones'), array('controller' => 'asignaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignacion'), array('controller' => 'asignaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
