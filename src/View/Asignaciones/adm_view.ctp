<div class="asignaciones view">
<h2><?php  echo __('Asignacion');?></h2>
	<dl>
		<dt><?php echo __('Equipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($asignacion['Equipo']['nombre_equipo'], array('controller' => 'equipos', 'action' => 'view', $asignacion['Equipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($asignacion['Asignacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Laboratorio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($asignacion['Laboratorio']['nombre_laboratorio'], array('controller' => 'laboratorios', 'action' => 'view', $asignacion['Laboratorio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Asignacion'); ?></dt>
		<dd>
			<?php echo h($asignacion['Asignacion']['fecha_asignacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Retiro'); ?></dt>
		<dd>
			<?php echo h($asignacion['Asignacion']['fecha_retiro']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Asignacion'), array('action' => 'edit', $asignacion['Asignacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Asignacion'), array('action' => 'delete', $asignacion['Asignacion']['id']), null, __('Are you sure you want to delete # %s?', $asignacion['Asignacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Asignaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipos'), array('controller' => 'equipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipo'), array('controller' => 'equipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratorios'), array('controller' => 'laboratorios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratorio'), array('controller' => 'laboratorios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movimientos'), array('controller' => 'movimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Movimientos');?></h3>
	<?php if (!empty($asignacion['Movimiento'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Equipo Id'); ?></th>
		<th><?php echo __('Asignacion Id'); ?></th>
		<th><?php echo __('Fecha Movimiento'); ?></th>
		<th><?php echo __('Observaciones Del Movimiento'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($asignacion['Movimiento'] as $movimiento): ?>
		<tr>
			<td><?php echo $movimiento['id'];?></td>
			<td><?php echo $movimiento['equipo_id'];?></td>
			<td><?php echo $movimiento['asignacion_id'];?></td>
			<td><?php echo $movimiento['fecha_movimiento'];?></td>
			<td><?php echo $movimiento['observaciones_del_movimiento'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'movimientos', 'action' => 'view', $movimiento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'movimientos', 'action' => 'edit', $movimiento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'movimientos', 'action' => 'delete', $movimiento['id']), null, __('Are you sure you want to delete # %s?', $movimiento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
