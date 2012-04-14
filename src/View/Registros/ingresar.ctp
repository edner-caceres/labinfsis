<div class="registros form">
<?php echo $this->Form->create('Registro');?>
	<fieldset>
		<legend><?php echo __('Add Registro'); ?></legend>
	<?php
		echo $this->Form->input('cuenta_id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('equipo_id');
		echo $this->Form->input('curso_id');
		echo $this->Form->input('observaciones_registro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
