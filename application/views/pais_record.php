<div id="eys-nav-i">
    <h3 style="text-align: left; margin-top:-10px;"><?php echo $title ?? ''; ?></h3>
    <?php echo form_open('pais/save_edit') ?>
    <ul>
        <!-- Verifica la existencia de $pais antes de acceder a sus elementos -->
        <?php if (!empty($pais)): ?>
        <li><?php echo anchor('pais/elprimero/', 'primero'); ?></li>
        <li><?php echo anchor('pais/anterior/'.$pais['idpais'], 'anterior'); ?></li>
        <li><?php echo anchor('pais/siguiente/'.$pais['idpais'], 'siguiente'); ?></li>
        <li style="border-right:1px solid green"><?php echo anchor('pais/elultimo/', 'Último'); ?></li>
        <li><?php echo anchor('pais/add', 'Nuevo'); ?></li>
        <li><?php echo anchor('pais/edit/'.$pais['idpais'],'Edit'); ?></li>
        <li style="border-right:1px solid green"><?php echo anchor('pais/delete/'.$pais['idpais'],'Delete'); ?></li>
        <?php endif; ?>
        <li><?php echo anchor('pais/listar/','Listar'); ?></li>
    </ul>
    <?php echo form_hidden('idpais', isset($pais['idpais']) ? $pais['idpais'] : ''); ?>
    <table>
        <tr>
            <td>Id Tipo Doc:</td>
            <td><?php echo form_input('idpais', isset($pais['idpais']) ? $pais['idpais'] : '', array("disabled"=>"disabled",'placeholder'=>'Idpaiss')) ?></td>
        </tr>
        <tr>
            <td>Descripción:</td>
            <td><?php echo form_input('nombre', isset($pais['nombre']) ? $pais['nombre'] : '', array("disabled"=>"disabled",'placeholder'=>'nombre')) ?></td>
        </tr>
    </table>
    <?php echo form_close(); ?>
</div>
</body>