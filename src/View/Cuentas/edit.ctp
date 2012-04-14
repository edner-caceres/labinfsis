<div class="cuentas form">
<?php echo $this->Form->create('Cuenta');?>
	<fieldset>
		<legend><?php echo __('Edit Cuenta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('rol_id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('usuario');
		echo $this->Form->input('contrasenia');
		echo $this->Form->input('fecha_registro');
		echo $this->Form->input('fecha_caducidad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cuenta.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Cuenta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviciones'), array('controller' => 'reviciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revicion'), array('controller' => 'reviciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registros'), array('controller' => 'registros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro'), array('controller' => 'registros', 'action' => 'add')); ?> </li>
	</ul>
</div>
