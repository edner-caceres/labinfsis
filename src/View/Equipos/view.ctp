<div class="equipos view">
    <h2><?php echo __('Equipo'); ?> - <?php echo h($equipo['Equipo']['nombre_equipo']); ?></h2>
    <dl>
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
        <dt><?php echo __('Estado'); ?></dt>
        <dd>
            <?php echo h($equipo['Estado']['nombre_estado']); ?>
        </dd>
        
        <dt><?php echo __('Descripcion Equipo'); ?></dt>
        <dd>
            <?php echo h($equipo['Equipo']['descripcion_equipo']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="related">
    <h3><?php echo __('Componentes'); ?></h3>
    <table cellpadding = "0" cellspacing = "0">
        <tr>
            <th><?php echo __('Pieza'); ?></th>
            <th><?php echo __('Modelo'); ?></th>
            <th><?php echo __('Fabricante'); ?></th>
            <th><?php echo __('Numero De Serie'); ?></th>
        </tr>
        <?php
            $i = 0;
            foreach ($equipo['Componente'] as $componente): ?>
                <tr>
                    <td><?php echo $componente['pieza_id']; ?></td>
                    <td><?php echo $componente['modelo_id']; ?></td>
                    <td><?php echo $componente['fabricante_id']; ?></td>                    
                    <td><?php echo $componente['numero_de_serie']; ?></td>
                </tr>
        <?php endforeach; ?>
            </table>


        </div>
        <div class="related">
            <h3><?php echo __('Asignaciones'); ?></h3>

            <table cellpadding = "0" cellspacing = "0">
                <tr>
                    <th><?php echo __('Laboratorio'); ?></th>
                    <th><?php echo __('Fecha Asignacion'); ?></th>
                    <th><?php echo __('Fecha Retiro'); ?></th>
                </tr>
        <?php
                $i = 0;
                foreach ($equipo['Asignacion'] as $asignacion): ?>
                    <tr>
                        <td><?php echo $asignacion['laboratorio_id']; ?></td>
                        <td><?php echo $asignacion['fecha_asignacion']; ?></td>
                        <td><?php echo $asignacion['fecha_retiro']; ?></td>
                    </tr>
        <?php endforeach; ?>
    </table>


</div>



