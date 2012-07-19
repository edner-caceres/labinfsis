<div class="modelos form">
<?php echo $this->Form->create('Modelo');?>
	<fieldset>
		<legend><?php echo __('Adm Add Modelo'); ?></legend>
	<?php
		echo $this->Form->input('nombre_modelo');
		echo $this->Form->input('descripcion_marca');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Modelos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Componentes'), array('controller' => 'componentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Componente'), array('controller' => 'componentes', 'action' => 'add')); ?> </li>
	</ul>
</div>
