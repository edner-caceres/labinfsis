<div class="piezas view">
<h2><?php  echo __('Pieza');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pieza['Pieza']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Pieza'); ?></dt>
		<dd>
			<?php echo h($pieza['Pieza']['nombre_pieza']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pieza Interna'); ?></dt>
		<dd>
			<?php echo h($pieza['Pieza']['pieza_interna']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Pieza'); ?></dt>
		<dd>
			<?php echo h($pieza['Pieza']['descripcion_pieza']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pieza'), array('action' => 'edit', $pieza['Pieza']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pieza'), array('action' => 'delete', $pieza['Pieza']['id']), null, __('Are you sure you want to delete # %s?', $pieza['Pieza']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Piezas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pieza'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Componentes'), array('controller' => 'componentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Componente'), array('controller' => 'componentes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Componentes');?></h3>
	<?php if (!empty($pieza['Componente'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Modelo Id'); ?></th>
		<th><?php echo __('Fabricante Id'); ?></th>
		<th><?php echo __('Equipo Id'); ?></th>
		<th><?php echo __('Pieza Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Numero De Serie'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pieza['Componente'] as $componente): ?>
		<tr>
			<td><?php echo $componente['id'];?></td>
			<td><?php echo $componente['modelo_id'];?></td>
			<td><?php echo $componente['fabricante_id'];?></td>
			<td><?php echo $componente['equipo_id'];?></td>
			<td><?php echo $componente['pieza_id'];?></td>
			<td><?php echo $componente['estado_id'];?></td>
			<td><?php echo $componente['numero_de_serie'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'componentes', 'action' => 'view', $componente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'componentes', 'action' => 'edit', $componente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'componentes', 'action' => 'delete', $componente['id']), null, __('Are you sure you want to delete # %s?', $componente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Componente'), array('controller' => 'componentes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
