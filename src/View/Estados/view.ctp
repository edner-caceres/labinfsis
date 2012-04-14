<div class="estados view">
<h2><?php  echo __('Estado');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Estado'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['nombre_estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Estado'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['descripcion_estado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado'), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estado'), array('action' => 'delete', $estado['Estado']['id']), null, __('Are you sure you want to delete # %s?', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Componentes'), array('controller' => 'componentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Componente'), array('controller' => 'componentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipos'), array('controller' => 'equipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipo'), array('controller' => 'equipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Componentes');?></h3>
	<?php if (!empty($estado['Componente'])):?>
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
		foreach ($estado['Componente'] as $componente): ?>
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
<div class="related">
	<h3><?php echo __('Related Equipos');?></h3>
	<?php if (!empty($estado['Equipo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Nia'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Nombre Equipo'); ?></th>
		<th><?php echo __('Descripcion Equipo'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estado['Equipo'] as $equipo): ?>
		<tr>
			<td><?php echo $equipo['id'];?></td>
			<td><?php echo $equipo['estado_id'];?></td>
			<td><?php echo $equipo['nia'];?></td>
			<td><?php echo $equipo['codigo'];?></td>
			<td><?php echo $equipo['nombre_equipo'];?></td>
			<td><?php echo $equipo['descripcion_equipo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'equipos', 'action' => 'view', $equipo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'equipos', 'action' => 'edit', $equipo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'equipos', 'action' => 'delete', $equipo['id']), null, __('Are you sure you want to delete # %s?', $equipo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Equipo'), array('controller' => 'equipos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
