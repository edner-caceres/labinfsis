<div class="componentes form">
<?php echo $this->Form->create('Componente');?>
	<fieldset>
		<legend><?php echo __('Edit Componente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('modelo_id');
		echo $this->Form->input('fabricante_id');
		echo $this->Form->input('equipo_id');
		echo $this->Form->input('pieza_id');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('numero_de_serie');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Componente.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Componente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Componentes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Modelos'), array('controller' => 'modelos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modelo'), array('controller' => 'modelos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fabricantes'), array('controller' => 'fabricantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fabricante'), array('controller' => 'fabricantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipos'), array('controller' => 'equipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipo'), array('controller' => 'equipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Piezas'), array('controller' => 'piezas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pieza'), array('controller' => 'piezas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cambios'), array('controller' => 'cambios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cambio'), array('controller' => 'cambios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviciones'), array('controller' => 'reviciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revicion'), array('controller' => 'reviciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
