<div class="componentes index">
	<h2><?php echo __('Componentes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('modelo_id');?></th>
			<th><?php echo $this->Paginator->sort('fabricante_id');?></th>
			<th><?php echo $this->Paginator->sort('equipo_id');?></th>
			<th><?php echo $this->Paginator->sort('pieza_id');?></th>
			<th><?php echo $this->Paginator->sort('estado_id');?></th>
			<th><?php echo $this->Paginator->sort('numero_de_serie');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($componentes as $componente): ?>
	<tr>
		<td><?php echo h($componente['Componente']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($componente['Modelo']['nombre_modelo'], array('controller' => 'modelos', 'action' => 'view', $componente['Modelo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($componente['Fabricante']['id'], array('controller' => 'fabricantes', 'action' => 'view', $componente['Fabricante']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($componente['Equipo']['nombre_equipo'], array('controller' => 'equipos', 'action' => 'view', $componente['Equipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($componente['Pieza']['id'], array('controller' => 'piezas', 'action' => 'view', $componente['Pieza']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($componente['Estado']['nombre_estado'], array('controller' => 'estados', 'action' => 'view', $componente['Estado']['id'])); ?>
		</td>
		<td><?php echo h($componente['Componente']['numero_de_serie']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $componente['Componente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $componente['Componente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $componente['Componente']['id']), null, __('Are you sure you want to delete # %s?', $componente['Componente']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Componente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Modelos'), array('controller' => 'modelos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modelo'), array('controller' => 'modelos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fabricantes'), array('controller' => 'fabricantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fabricante'), array('controller' => 'fabricantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipos'), array('controller' => 'equipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipo'), array('controller' => 'equipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Piezas'), array('controller' => 'piezas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pieza'), array('controller' => 'piezas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cambios'), array('controller' => 'cambios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cambio'), array('controller' => 'cambios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviciones'), array('controller' => 'reviciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revicion'), array('controller' => 'reviciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
