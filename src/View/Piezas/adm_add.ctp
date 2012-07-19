<div class="piezas form">
<?php echo $this->Form->create('Pieza');?>
	<fieldset>
		<legend><?php echo __('Adm Add Pieza'); ?></legend>
	<?php
		echo $this->Form->input('nombre_pieza');
		echo $this->Form->input('pieza_interna');
		echo $this->Form->input('descripcion_pieza');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Piezas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Componentes'), array('controller' => 'componentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Componente'), array('controller' => 'componentes', 'action' => 'add')); ?> </li>
	</ul>
</div>
