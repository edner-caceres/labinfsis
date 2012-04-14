<div class="laboratorios view">
<h2><?php  echo __('Laboratorio');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($laboratorio['Laboratorio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Laboratorio'); ?></dt>
		<dd>
			<?php echo h($laboratorio['Laboratorio']['nombre_laboratorio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero De Equipos'); ?></dt>
		<dd>
			<?php echo h($laboratorio['Laboratorio']['numero_de_equipos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Laboratorio'); ?></dt>
		<dd>
			<?php echo h($laboratorio['Laboratorio']['descripcion_laboratorio']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Laboratorio'), array('action' => 'edit', $laboratorio['Laboratorio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Laboratorio'), array('action' => 'delete', $laboratorio['Laboratorio']['id']), null, __('Are you sure you want to delete # %s?', $laboratorio['Laboratorio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratorios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratorio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asignaciones'), array('controller' => 'asignaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignacion'), array('controller' => 'asignaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Asignaciones');?></h3>
	<?php if (!empty($laboratorio['Asignacion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Equipo Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Laboratorio Id'); ?></th>
		<th><?php echo __('Fecha Asignacion'); ?></th>
		<th><?php echo __('Fecha Retiro'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($laboratorio['Asignacion'] as $asignacion): ?>
		<tr>
			<td><?php echo $asignacion['equipo_id'];?></td>
			<td><?php echo $asignacion['id'];?></td>
			<td><?php echo $asignacion['laboratorio_id'];?></td>
			<td><?php echo $asignacion['fecha_asignacion'];?></td>
			<td><?php echo $asignacion['fecha_retiro'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'asignaciones', 'action' => 'view', $asignacion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'asignaciones', 'action' => 'edit', $asignacion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'asignaciones', 'action' => 'delete', $asignacion['id']), null, __('Are you sure you want to delete # %s?', $asignacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Asignacion'), array('controller' => 'asignaciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
