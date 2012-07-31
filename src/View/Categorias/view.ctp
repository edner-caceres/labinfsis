<div class="categorias view">
<h2><?php  echo __('Categoria');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Categoria'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['nombre_categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Categoria'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['descripcion_categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagen Categoria'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['imagen_categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria Id'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['categoria_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoria'), array('action' => 'edit', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoria'), array('action' => 'delete', $categoria['Categoria']['id']), null, __('Are you sure you want to delete # %s?', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipos'), array('controller' => 'equipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipo'), array('controller' => 'equipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Categorias');?></h3>
	<?php if (!empty($categoria['Categoria'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Categoria'); ?></th>
		<th><?php echo __('Descripcion Categoria'); ?></th>
		<th><?php echo __('Imagen Categoria'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($categoria['Categoria'] as $categoria): ?>
		<tr>
			<td><?php echo $categoria['id'];?></td>
			<td><?php echo $categoria['nombre_categoria'];?></td>
			<td><?php echo $categoria['descripcion_categoria'];?></td>
			<td><?php echo $categoria['imagen_categoria'];?></td>
			<td><?php echo $categoria['categoria_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'categorias', 'action' => 'view', $categoria['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'categorias', 'action' => 'edit', $categoria['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categorias', 'action' => 'delete', $categoria['id']), null, __('Are you sure you want to delete # %s?', $categoria['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Equipos');?></h3>
	<?php if (!empty($categoria['Equipo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Nia'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Nombre Equipo'); ?></th>
		<th><?php echo __('Descripcion Equipo'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($categoria['Equipo'] as $equipo): ?>
		<tr>
			<td><?php echo $equipo['id'];?></td>
			<td><?php echo $equipo['estado_id'];?></td>
			<td><?php echo $equipo['nia'];?></td>
			<td><?php echo $equipo['codigo'];?></td>
			<td><?php echo $equipo['nombre_equipo'];?></td>
			<td><?php echo $equipo['descripcion_equipo'];?></td>
			<td><?php echo $equipo['categoria_id'];?></td>
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
