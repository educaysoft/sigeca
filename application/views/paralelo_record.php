<div id="eys-nav-i" class="mt-3 p-3">
    <h3 style="text-align: left; margin-top:-10px;"> <?php echo $title;  ?></h3>
    <ul>
        <?php
        if (isset($paralelo)) {
        ?>
            <li> <?php echo anchor('paralelo/elprimero/', 'Primero'); ?></li>
            <li> <?php echo anchor('paralelo/siguiente/' . $paralelo['idparalelo'], 'Siguiente'); ?></li>
            <li> <?php echo anchor('paralelo/anterior/' . $paralelo['idparalelo'], 'Anterior'); ?></li>
            <li style="border-right:1px solid green"><?php echo anchor('paralelo/elultimo/', 'Último'); ?></li>
            <li> <?php echo anchor('paralelo/add', 'Nuevo'); ?></li>
            <li> <?php echo anchor('paralelo/edit/' . $paralelo['idparalelo'], 'Editar'); ?></li>
            <li style="border-right:1px solid green"> <?php echo anchor('paralelo/eliminar/' . $paralelo['idparalelo'], 'Eliminar'); ?></li>
            <li> <?php echo anchor('paralelo/listar/', 'Listar'); ?></li>

        <?php
        } else {
        ?>

            <li> <?php echo anchor('paralelo/add', 'Nuevo'); ?></li>
        <?php
        }
        ?>
    </ul>
</div>
<br>
<br>

<div class="form-group row">
    <div class="col-md-10">
        <?php echo form_open('paralelo/save_edit') ?>
        <?php if (isset($paralelo['idparalelo'])) : ?>
            <?php echo form_hidden('idparalelo', $paralelo['idparalelo']) ?>
        <?php endif; ?>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label"> Id:</label>
    <div class="col-md-10">
        <?php
        if (isset($paralelo['idparalelo'])) {
            echo form_input('idparalelo', $paralelo['idparalelo'], array("disabled" => "disabled", 'placeholder' => 'Numero del Pararelo'));
        } else {
            echo form_input('idparalelo', '', array("disabled" => "disabled", 'placeholder' => 'Numero del Pararelo'));
        }
        ?>
    </div>
</div>


<div class="form-group row">
    <label class="col-md-2 col-form-label"> Nombre:</label>
    <div class="col-md-10">
        <?php
        if (isset($paralelo['nombre'])) {
            echo form_input('nombre', $paralelo['nombre'], array("disabled" => "disabled", 'placeholder' => 'Nombre del paralelo'));
        } else {
            echo form_input('nombre', $paralelo['nombre'], array("disabled" => "disabled", 'placeholder' => 'Nombre del paralelo'));
        }
        ?>
    </div>
</div>

<?php echo form_close(); ?>