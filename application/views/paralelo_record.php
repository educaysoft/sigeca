
<div id="eys-nav-i" class="mt-4 p-2">
    <h3 class="mt-3 p-3"><?php echo $title; ?></h3>
    <ul class="list-inline d-inline">
        <?php if (isset($modoevaluacion) && isset($modoevaluacion['idmodoevaluacion'])) : ?>
            <li class="list-inline-item"> <?php echo anchor('modoevaluacion/elprimero/', 'Primero'); ?></li>
            <li class="list-inline-item"> <?php echo anchor('modoevaluacion/siguiente/' . $modoevaluacion['idmodoevaluacion'], 'Siguiente'); ?></li>
            <li class="list-inline-item"> <?php echo anchor('modoevaluacion/anterior/' . $modoevaluacion['idmodoevaluacion'], 'Anterior'); ?></li>
            <li class="list-inline-item" style="border-left: 1px solid #ccc; padding-left: 10px;">  <?php echo anchor('modoevaluacion/elultimo/', 'Último'); ?></li>
            <li class="list-inline-item"> <?php echo anchor('modoevaluacion/add', 'Nuevo'); ?></li>
            <li class="list-inline-item"> <?php echo anchor('modoevaluacion/edit/' . $modoevaluacion['idmodoevaluacion'], 'Editar'); ?></li>
            <li class="list-inline-item"> <?php echo anchor('modoevaluacion/delete/' . $modoevaluacion['idmodoevaluacion'], 'Quitar'); ?></li>
            <li class="list-inline-item" style="border-left: 1px solid #ccc; padding-left: 10px;"> <?php echo anchor('modoevaluacion/listar/', 'Listar'); ?></li>
        <?php endif; ?>
    </ul>

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
        <?php echo form_input('nombre', isset($paralelo['nombre']) ? $paralelo['nombre'] : '', array('placeholder' => 'Nombre del paralelo')); ?>
    </div>
</div>

<?php echo form_close(); ?>