<div class="personas view">
<h2><?php  echo __('Persona');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ci'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['ci']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Paterno'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['apellido_paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Materno'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['apellido_materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Persona'), array('action' => 'edit', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Persona'), array('action' => 'delete', $persona['Persona']['id']), null, __('Are you sure you want to delete # %s?', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registros'), array('controller' => 'registros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro'), array('controller' => 'registros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('controller' => 'cuentas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Registros');?></h3>
	<?php if (!empty($persona['Registro'])):?>
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
		foreach ($persona['Registro'] as $registro): ?>
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
<div class="related">
	<h3><?php echo __('Related Cuentas');?></h3>
	<?php if (!empty($persona['Cuenta'])):?>
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
		foreach ($persona['Cuenta'] as $cuenta): ?>
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
