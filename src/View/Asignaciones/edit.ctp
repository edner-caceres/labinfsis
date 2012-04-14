<div class="asignaciones form">
<?php echo $this->Form->create('Asignacion');?>
	<fieldset>
		<legend><?php echo __('Edit Asignacion'); ?></legend>
	<?php
		echo $this->Form->input('equipo_id');
		echo $this->Form->input('id');
		echo $this->Form->input('laboratorio_id');
		echo $this->Form->input('fecha_asignacion');
		echo $this->Form->input('fecha_retiro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Asignacion.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Asignacion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Asignaciones'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Equipos'), array('controller' => 'equipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipo'), array('controller' => 'equipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratorios'), array('controller' => 'laboratorios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratorio'), array('controller' => 'laboratorios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movimientos'), array('controller' => 'movimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
