<div class="asignaciones index">
    <h2><?php echo __('Asignaciones'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('equipo_id'); ?></th>
            <th><?php echo $this->Paginator->sort('laboratorio_id'); ?></th>
            <th><?php echo $this->Paginator->sort('fecha_asignacion'); ?></th>
            <th><?php echo $this->Paginator->sort('fecha_retiro'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($asignaciones as $asignacion): ?>
            <tr>
                <td><?php echo h($asignacion['Asignacion']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($asignacion['Equipo']['nombre_equipo'], array('controller' => 'equipos', 'action' => 'view', $asignacion['Equipo']['id'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($asignacion['Laboratorio']['nombre_laboratorio'], array('controller' => 'laboratorios', 'action' => 'view', $asignacion['Laboratorio']['id'])); ?>
                </td>
                <td><?php echo h($asignacion['Asignacion']['fecha_asignacion']); ?>&nbsp;</td>
                <td><?php echo h($asignacion['Asignacion']['fecha_retiro']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $asignacion['Asignacion']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $asignacion['Asignacion']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $asignacion['Asignacion']['id']), null, __('Are you sure you want to delete # %s?', $asignacion['Asignacion']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Asignacion'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Equipos'), array('controller' => 'equipos', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Equipo'), array('controller' => 'equipos', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Laboratorios'), array('controller' => 'laboratorios', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Laboratorio'), array('controller' => 'laboratorios', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Movimientos'), array('controller' => 'movimientos', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add')); ?> </li>
    </ul>
</div>
