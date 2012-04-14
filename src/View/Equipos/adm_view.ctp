<div class="equipos view">
<h2><?php  echo __('Equipo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($equipo['Estado']['id'], array('controller' => 'estados', 'action' => 'view', $equipo['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nia'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['nia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Equipo'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['nombre_equipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Equipo'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['descripcion_equipo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Equipo'), array('action' => 'edit', $equipo['Equipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Equipo'), array('action' => 'delete', $equipo['Equipo']['id']), null, __('Are you sure you want to delete # %s?', $equipo['Equipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movimientos'), array('controller' => 'movimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registros'), array('controller' => 'registros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro'), array('controller' => 'registros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviciones'), array('controller' => 'reviciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revicion'), array('controller' => 'reviciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Componentes'), array('controller' => 'componentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Componente'), array('controller' => 'componentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asignaciones'), array('controller' => 'asignaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignacion'), array('controller' => 'asignaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Movimientos');?></h3>
	<?php if (!empty($equipo['Movimiento'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Equipo Id'); ?></th>
		<th><?php echo __('Asignacion Id'); ?></th>
		<th><?php echo __('Fecha Movimiento'); ?></th>
		<th><?php echo __('Observaciones Del Movimiento'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($equipo['Movimiento'] as $movimiento): ?>
		<tr>
			<td><?php echo $movimiento['id'];?></td>
			<td><?php echo $movimiento['equipo_id'];?></td>
			<td><?php echo $movimiento['asignacion_id'];?></td>
			<td><?php echo $movimiento['fecha_movimiento'];?></td>
			<td><?php echo $movimiento['observaciones_del_movimiento'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'movimientos', 'action' => 'view', $movimiento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'movimientos', 'action' => 'edit', $movimiento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'movimientos', 'action' => 'delete', $movimiento['id']), null, __('Are you sure you want to delete # %s?', $movimiento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Registros');?></h3>
	<?php if (!empty($equipo['Registro'])):?>
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
		foreach ($equipo['Registro'] as $registro): ?>
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
	<h3><?php echo __('Related Reviciones');?></h3>
	<?php if (!empty($equipo['Revicion'])):?>
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
		foreach ($equipo['Revicion'] as $revicion): ?>
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
	<h3><?php echo __('Related Componentes');?></h3>
	<?php if (!empty($equipo['Componente'])):?>
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
		foreach ($equipo['Componente'] as $componente): ?>
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
	<h3><?php echo __('Related Asignaciones');?></h3>
	<?php if (!empty($equipo['Asignacion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Equipo Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Laboratorio Id'); ?></th>
		<th><?php echo __('Fecha Asignacion'); ?></th>
		<th><?php echo __('Fecha Retiro'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($equipo['Asignacion'] as $asignacion): ?>
		<tr>
			<td><?php echo $asignacion['equipo_id'];?></td>
			<td><?php echo $asignacion['id'];?></td>
			<td><?php echo $asignacion['laboratorio_id'];?></td>
			<td><?php echo $asignacion['fecha_asignacion'];?></td>
			<td><?php echo $asignacion['fecha_retiro'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'asignaciones', 'action' => 'view', $asignacion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'asignaciones', 'action' => 'edit', $asignacion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'asignaciones', 'action' => 'delete', $asignacion['id']), null, __('Are you sure you want to delete # %s?', $asignacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Asignacion'), array('controller' => 'asignaciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
