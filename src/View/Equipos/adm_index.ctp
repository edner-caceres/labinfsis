<div class="equipos index">
	<h2><?php echo __('Equipos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('estado_id');?></th>
			<th><?php echo $this->Paginator->sort('nia');?></th>
			<th><?php echo $this->Paginator->sort('codigo');?></th>
			<th><?php echo $this->Paginator->sort('nombre_equipo');?></th>
			<th><?php echo $this->Paginator->sort('descripcion_equipo');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($equipos as $equipo): ?>
	<tr>
		<td><?php echo h($equipo['Equipo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($equipo['Estado']['nombre_estado'], array('controller' => 'estados', 'action' => 'view', $equipo['Estado']['id'])); ?>
		</td>
		<td><?php echo h($equipo['Equipo']['nia']); ?>&nbsp;</td>
		<td><?php echo h($equipo['Equipo']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($equipo['Equipo']['nombre_equipo']); ?>&nbsp;</td>
		<td><?php echo h($equipo['Equipo']['descripcion_equipo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $equipo['Equipo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $equipo['Equipo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $equipo['Equipo']['id']), null, __('Are you sure you want to delete # %s?', $equipo['Equipo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Equipo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movimientos'), array('controller' => 'movimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registros'), array('controller' => 'registros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro'), array('controller' => 'registros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviciones'), array('controller' => 'reviciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revicion'), array('controller' => 'reviciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Componentes'), array('controller' => 'componentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Componente'), array('controller' => 'componentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asignaciones'), array('controller' => 'asignaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignacion'), array('controller' => 'asignaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
