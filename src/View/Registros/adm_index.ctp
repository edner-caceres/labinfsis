<div class="registros index">
	<h2><?php echo __('Registros');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('cuenta_id');?></th>
			<th><?php echo $this->Paginator->sort('persona_id');?></th>
			<th><?php echo $this->Paginator->sort('equipo_id');?></th>
			<th><?php echo $this->Paginator->sort('curso_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_registro_inicio');?></th>
			<th><?php echo $this->Paginator->sort('fecha_registro_fin');?></th>
			<th><?php echo $this->Paginator->sort('observaciones_registro');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($registros as $registro): ?>
	<tr>
		<td><?php echo h($registro['Registro']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($registro['Cuenta']['usuario'], array('controller' => 'cuentas', 'action' => 'view', $registro['Cuenta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($registro['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $registro['Persona']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($registro['Equipo']['nombre_equipo'], array('controller' => 'equipos', 'action' => 'view', $registro['Equipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($registro['Curso']['nombre_curso'], array('controller' => 'cursos', 'action' => 'view', $registro['Curso']['id'])); ?>
		</td>
		<td><?php echo h($registro['Registro']['fecha_registro_inicio']); ?>&nbsp;</td>
		<td><?php echo h($registro['Registro']['fecha_registro_fin']); ?>&nbsp;</td>
		<td><?php echo h($registro['Registro']['observaciones_registro']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $registro['Registro']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $registro['Registro']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $registro['Registro']['id']), null, __('Are you sure you want to delete # %s?', $registro['Registro']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Registro'), array('action' => 'add')); ?></li>
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
