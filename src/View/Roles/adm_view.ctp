<div class="roles view">
<h2><?php  echo __('Rol');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rol['Rol']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Rol'); ?></dt>
		<dd>
			<?php echo h($rol['Rol']['nombre_rol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Rol'); ?></dt>
		<dd>
			<?php echo h($rol['Rol']['descripcion_rol']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rol'), array('action' => 'edit', $rol['Rol']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rol'), array('action' => 'delete', $rol['Rol']['id']), null, __('Are you sure you want to delete # %s?', $rol['Rol']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('controller' => 'cuentas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cuentas');?></h3>
	<?php if (!empty($rol['Cuenta'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Rol Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th><?php echo __('Contrasenia'); ?></th>
		<th><?php echo __('Fecha Registro'); ?></th>
		<th><?php echo __('Fecha Caducidad'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($rol['Cuenta'] as $cuenta): ?>
		<tr>
			<td><?php echo $cuenta['id'];?></td>
			<td><?php echo $cuenta['rol_id'];?></td>
			<td><?php echo $cuenta['persona_id'];?></td>
			<td><?php echo $cuenta['usuario'];?></td>
			<td><?php echo $cuenta['contrasenia'];?></td>
			<td><?php echo $cuenta['fecha_registro'];?></td>
			<td><?php echo $cuenta['fecha_caducidad'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cuentas', 'action' => 'view', $cuenta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cuentas', 'action' => 'edit', $cuenta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cuentas', 'action' => 'delete', $cuenta['id']), null, __('Are you sure you want to delete # %s?', $cuenta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
