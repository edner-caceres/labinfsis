<div class="tipos form">
<?php echo $this->Form->create('Tipo');?>
	<fieldset>
		<legend><?php echo __('Adm Edit Tipo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_tipo');
		echo $this->Form->input('descripcion_tipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tipo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
