<div class="modelos view">
<h2><?php  echo __('Modelo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($modelo['Modelo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Modelo'); ?></dt>
		<dd>
			<?php echo h($modelo['Modelo']['nombre_modelo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Marca'); ?></dt>
		<dd>
			<?php echo h($modelo['Modelo']['descripcion_marca']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Modelo'), array('action' => 'edit', $modelo['Modelo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Modelo'), array('action' => 'delete', $modelo['Modelo']['id']), null, __('Are you sure you want to delete # %s?', $modelo['Modelo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modelos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modelo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Componentes'), array('controller' => 'componentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Componente'), array('controller' => 'componentes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Componentes');?></h3>
	<?php if (!empty($modelo['Componente'])):?>
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
		foreach ($modelo['Componente'] as $componente): ?>
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
