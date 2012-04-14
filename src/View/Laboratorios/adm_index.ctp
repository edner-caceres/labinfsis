<div class="laboratorios index">
	<h2><?php echo __('Laboratorios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre_laboratorio');?></th>
			<th><?php echo $this->Paginator->sort('numero_de_equipos');?></th>
			<th><?php echo $this->Paginator->sort('descripcion_laboratorio');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($laboratorios as $laboratorio): ?>
	<tr>
		<td><?php echo h($laboratorio['Laboratorio']['id']); ?>&nbsp;</td>
		<td><?php echo h($laboratorio['Laboratorio']['nombre_laboratorio']); ?>&nbsp;</td>
		<td><?php echo h($laboratorio['Laboratorio']['numero_de_equipos']); ?>&nbsp;</td>
		<td><?php echo h($laboratorio['Laboratorio']['descripcion_laboratorio']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $laboratorio['Laboratorio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $laboratorio['Laboratorio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $laboratorio['Laboratorio']['id']), null, __('Are you sure you want to delete # %s?', $laboratorio['Laboratorio']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Laboratorio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Asignaciones'), array('controller' => 'asignaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignacion'), array('controller' => 'asignaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
