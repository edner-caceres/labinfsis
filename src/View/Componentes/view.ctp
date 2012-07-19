<div class="componentes view">
<h2><?php  echo __('Componente');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($componente['Componente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($componente['Modelo']['nombre_modelo'], array('controller' => 'modelos', 'action' => 'view', $componente['Modelo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fabricante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($componente['Fabricante']['id'], array('controller' => 'fabricantes', 'action' => 'view', $componente['Fabricante']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Equipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($componente['Equipo']['nombre_equipo'], array('controller' => 'equipos', 'action' => 'view', $componente['Equipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pieza'); ?></dt>
		<dd>
			<?php echo $this->Html->link($componente['Pieza']['id'], array('controller' => 'piezas', 'action' => 'view', $componente['Pieza']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($componente['Estado']['nombre_estado'], array('controller' => 'estados', 'action' => 'view', $componente['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero De Serie'); ?></dt>
		<dd>
			<?php echo h($componente['Componente']['numero_de_serie']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Componente'), array('action' => 'edit', $componente['Componente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Componente'), array('action' => 'delete', $componente['Componente']['id']), null, __('Are you sure you want to delete # %s?', $componente['Componente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Componentes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Componente'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Cambios');?></h3>
	<?php if (!empty($componente['Cambio'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Componente Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($componente['Cambio'] as $cambio): ?>
		<tr>
			<td><?php echo $cambio['componente_id'];?></td>
			<td><?php echo $cambio['id'];?></td>
			<td><?php echo $cambio['fecha'];?></td>
			<td><?php echo $cambio['descripcion'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cambios', 'action' => 'view', $cambio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cambios', 'action' => 'edit', $cambio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cambios', 'action' => 'delete', $cambio['id']), null, __('Are you sure you want to delete # %s?', $cambio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cambio'), array('controller' => 'cambios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Propiedades');?></h3>
	<?php if (!empty($componente['Propiedad'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Componente Id'); ?></th>
		<th><?php echo __('Caracteristica Id'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($componente['Propiedad'] as $propiedad): ?>
		<tr>
			<td><?php echo $propiedad['id'];?></td>
			<td><?php echo $propiedad['componente_id'];?></td>
			<td><?php echo $propiedad['caracteristica_id'];?></td>
			<td><?php echo $propiedad['valor'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'propiedades', 'action' => 'view', $propiedad['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'propiedades', 'action' => 'edit', $propiedad['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'propiedades', 'action' => 'delete', $propiedad['id']), null, __('Are you sure you want to delete # %s?', $propiedad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Propiedad'), array('controller' => 'propiedades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reviciones');?></h3>
	<?php if (!empty($componente['Revicion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Equipo Id'); ?></th>
		<th><?php echo __('Componente Id'); ?></th>
		<th><?php echo __('Cuenta Id'); ?></th>
		<th><?php echo __('Marca'); ?></th>
		<th><?php echo __('Fecha Revision'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($componente['Revicion'] as $revicion): ?>
		<tr>
			<td><?php echo $revicion['id'];?></td>
			<td><?php echo $revicion['equipo_id'];?></td>
			<td><?php echo $revicion['componente_id'];?></td>
			<td><?php echo $revicion['cuenta_id'];?></td>
			<td><?php echo $revicion['marca'];?></td>
			<td><?php echo $revicion['fecha_revision'];?></td>
			<td><?php echo $revicion['observaciones'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reviciones', 'action' => 'view', $revicion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reviciones', 'action' => 'edit', $revicion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reviciones', 'action' => 'delete', $revicion['id']), null, __('Are you sure you want to delete # %s?', $revicion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Revicion'), array('controller' => 'reviciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
