<div class="registros view">
<h2><?php  echo __('Registro');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($registro['Registro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuenta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($registro['Cuenta']['usuario'], array('controller' => 'cuentas', 'action' => 'view', $registro['Cuenta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($registro['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $registro['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Equipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($registro['Equipo']['nombre_equipo'], array('controller' => 'equipos', 'action' => 'view', $registro['Equipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($registro['Curso']['nombre_curso'], array('controller' => 'cursos', 'action' => 'view', $registro['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Registro Inicio'); ?></dt>
		<dd>
			<?php echo h($registro['Registro']['fecha_registro_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Registro Fin'); ?></dt>
		<dd>
			<?php echo h($registro['Registro']['fecha_registro_fin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones Registro'); ?></dt>
		<dd>
			<?php echo h($registro['Registro']['observaciones_registro']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Registro'), array('action' => 'edit', $registro['Registro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Registro'), array('action' => 'delete', $registro['Registro']['id']), null, __('Are you sure you want to delete # %s?', $registro['Registro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Registros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('controller' => 'cuentas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipos'), array('controller' => 'equipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipo'), array('controller' => 'equipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
