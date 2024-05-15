<!--Arhivo: modeevaluacion_record.php -->
<!--Modulo: modoevaluacion -->
<!--Descripción: vista que permite visualizar la información del modo de evaluacion -->
<!--Autor: Stalin Francis -->
<!--Fecha: Ultima evaluación: Sabado 4 febrero 2023 -->

<div id="eys-nav-i" class="mt-4 p-2">
    <h3 class="mt-3 p-3"><?php echo $title; ?></h3>
    <ul class="list-inline d-inline">
        <?php if (isset($modoevaluacion) && isset($modoevaluacion['idmodoevaluacion'])) : ?>
            <li class="list-inline-item"> <?php echo anchor('modoevaluacion/elprimero/', 'Primero'); ?></li>
            <li class="list-inline-item"> <?php echo anchor('modoevaluacion/siguiente/' . $modoevaluacion['idmodoevaluacion'], 'Siguiente'); ?></li>
            <li class="list-inline-item"> <?php echo anchor('modoevaluacion/anterior/' . $modoevaluacion['idmodoevaluacion'], 'Anterior'); ?></li>
            <li class="list-inline-item">  <?php echo anchor('modoevaluacion/elultimo/', 'Último'); ?></li>
            <li class="list-inline-item" style="border-left: 1px solid #ccc; padding-left: 10px;"> <?php echo anchor('modoevaluacion/add', 'Nuevo'); ?></li>
            <li class="list-inline-item"> <?php echo anchor('modoevaluacion/edit/' . $modoevaluacion['idmodoevaluacion'], 'Editar'); ?></li>
            <li class="list-inline-item"> <?php echo anchor('modoevaluacion/delete/' . $modoevaluacion['idmodoevaluacion'], 'Quitar'); ?></li>
            <li class="list-inline-item" style="border-left: 1px solid #ccc; padding-left: 10px;"> <?php echo anchor('modoevaluacion/listar/', 'Listar'); ?></li>
        <?php endif; ?>
    </ul>
</div>


<div class="form-group row">
   
    <div class="col-md-10">
        <?php echo form_open('modoevaluacion/save_edit') ?>
        <?php if (isset($modoevaluacion['idmodoevaluacion'])) : ?>
            <?php echo form_hidden('idmodoevaluacion', $modoevaluacion['idmodoevaluacion']); ?>
        <?php endif; ?>
    </div>
</div>

<div class="form-group row">
<label class="col-md-2 col-form-label"> Id:</label>
    <div class="col-md-10">
        <?php if (isset($modoevaluacion['idmodoevaluacion'])) : ?>
            <?php echo form_input('idmodoevaluacion', $modoevaluacion['idmodoevaluacion'], array("disabled" => "disabled", 'placeholder' => 'Idmodoevaluacions')); ?>
        <?php endif; ?>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label"> Nombre:</label>
    <div class="col-md-10">
        <?php if (isset($modoevaluacion['nombre'])) : ?>
            <?php echo form_input('nombre', $modoevaluacion['nombre'], array('placeholder' => 'Nombre del modoevaluacion')); ?>
        <?php endif; ?>
    </div>
</div>

<?php if (isset($modoevaluacion['ponderacion'])) : ?>
    <div class="form-group row">
        <label class="col-md-2 col-form-label"> Ponderación:</label>
        <div class="col-md-10">
            <?php echo form_input('ponderacion', $modoevaluacion['ponderacion'], array('placeholder' => 'Ponderación de la evaluación')); ?>
        </div>
    </div>
<?php endif; ?>

<?php echo form_close(); ?>