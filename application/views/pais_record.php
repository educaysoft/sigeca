<div id="eys-nav-i" style="margin-top: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    <h3 style="text-align: left; margin-top: 0;"><?php echo $title; ?></h3>
    <?php echo form_open('pais/save_edit', array('style' => 'margin-bottom: 20px;')); ?>
    <ul style="list-style-type: none; padding: 0; margin: 0;">
        <li style="display: inline-block; margin-right: 10px;"><?php echo anchor('pais/elprimero/', 'Primero'); ?></li>
        <?php if (isset($pais['idpais'])) : ?>
            <li style="display: inline-block; margin-right: 10px;"><?php echo anchor('pais/anterior/' . $pais['idpais'], 'Anterior'); ?></li>
            <li style="display: inline-block; margin-right: 10px;"><?php echo anchor('pais/siguiente/' . $pais['idpais'], 'Siguiente'); ?></li>
            <li style="display: inline-block; margin-right: 10px;"><?php echo anchor('pais/edit/' . $pais['idpais'], 'Editar'); ?></li>
            <li style="display: inline-block;"><?php echo anchor('pais/delete/' . $pais['idpais'], 'Eliminar', array('style' => 'color: red;')); ?></li>
        <?php endif; ?>
        <li style="display: inline-block; margin-left: 20px;"><?php echo anchor('pais/elultimo/', 'Último'); ?></li>
        <li style="display: inline-block; margin-left: 20px;"><?php echo anchor('pais/add', 'Nuevo'); ?></li>
        <li style="display: inline-block; margin-left: 20px;"><?php echo anchor('pais/listar/', 'Listar'); ?></li>
    </ul>
    <?php echo form_hidden('idpais', isset($pais['idpais']) ? $pais['idpais'] : ''); ?>
    <table style="margin-top: 20px;">
        <tr>
            <td>Id Tipo Documento:</td>
            <td><?php echo form_input('idpais', isset($pais['idpais']) ? $pais['idpais'] : '', array("disabled" => "disabled", 'placeholder' => 'ID País', 'style' => 'width: 150px;')); ?></td>
        </tr>
        <tr>
            <td>Descripción:</td>
            <td><?php echo form_input('nombre', isset($pais['nombre']) ? $pais['nombre'] : '', array("disabled" => "disabled", 'placeholder' => 'Nombre', 'style' => 'width: 150px;')); ?></td>
        </tr>
    </table>
    <?php echo form_close(); ?>
</div>