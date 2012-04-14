<div class="roles form">
<?php echo $this->Form->create('Rol');?>
	<fieldset>
		<legend><?php echo __('Add Rol'); ?></legend>
	<?php
		echo $this->Form->input('nombre_rol');
		echo $this->Form->input('descripcion_rol');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('controller' => 'cuentas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add')); ?> </li>
	</ul>
</div>
