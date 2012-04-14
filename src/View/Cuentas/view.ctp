<div class="cuentas view">
<h2><?php  echo __('Cuenta');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cuenta['Rol']['nombre_rol'], array('controller' => 'roles', 'action' => 'view', $cuenta['Rol']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cuenta['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $cuenta['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contrasenia'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['contrasenia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Registro'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['fecha_registro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Caducidad'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['fecha_caducidad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cuenta'), array('action' => 'edit', $cuenta['Cuenta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cuenta'), array('action' => 'delete', $cuenta['Cuenta']['id']), null, __('Are you sure you want to delete # %s?', $cuenta['Cuenta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviciones'), array('controller' => 'reviciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revicion'), array('controller' => 'reviciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registros'), array('controller' => 'registros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro'), array('controller' => 'registros', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Reviciones');?></h3>
	<?php if (!empty($cuenta['Revicion'])):?>
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
		foreach ($cuenta['Revicion'] as $revicion): ?>
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
<div class="related">
	<h3><?php echo __('Related Registros');?></h3>
	<?php if (!empty($cuenta['Registro'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cuenta Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Equipo Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Fecha Registro Inicio'); ?></th>
		<th><?php echo __('Fecha Registro Fin'); ?></th>
		<th><?php echo __('Observaciones Registro'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cuenta['Registro'] as $registro): ?>
		<tr>
			<td><?php echo $registro['id'];?></td>
			<td><?php echo $registro['cuenta_id'];?></td>
			<td><?php echo $registro['persona_id'];?></td>
			<td><?php echo $registro['equipo_id'];?></td>
			<td><?php echo $registro['curso_id'];?></td>
			<td><?php echo $registro['fecha_registro_inicio'];?></td>
			<td><?php echo $registro['fecha_registro_fin'];?></td>
			<td><?php echo $registro['observaciones_registro'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'registros', 'action' => 'view', $registro['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'registros', 'action' => 'edit', $registro['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'registros', 'action' => 'delete', $registro['id']), null, __('Are you sure you want to delete # %s?', $registro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Registro'), array('controller' => 'registros', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
