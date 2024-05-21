<div id="eys-nav-i">
    <h3 style="text-align: left; margin-top:-10px;"> <?php echo $title; ?></h3>
    <ul>
        <?php if(isset($nacionalidad)) { ?>
            <li> <?php echo anchor('nacionalidad/elprimero/', 'primero'); ?></li>
            <li> <?php echo anchor('nacionalidad/siguiente/'.$nacionalidad['idnacionalidad'], 'siguiente'); ?></li>
            <li> <?php echo anchor('nacionalidad/anterior/'.$nacionalidad['idnacionalidad'], 'anterior'); ?></li>
            <li style="border-right:1px solid green"><?php echo anchor('nacionalidad/elultimo/', 'Último'); ?></li>
            <li> <?php echo anchor('nacionalidad/add', 'Nuevo'); ?></li>
            <li> <?php echo anchor('nacionalidad/edit/'.$nacionalidad['idnacionalidad'],'Edit'); ?></li>
            <li style="border-right:1px solid green"> <?php echo anchor('nacionalidad/delete/'.$nacionalidad['idnacionalidad'],'Delete'); ?></li>
            <li> <?php echo anchor('nacionalidad/listar/','Listar'); ?></li>
        <?php } else { ?>
            <li> <?php echo anchor('nacionalidad/add', 'Nuevo'); ?></li>
        <?php } ?>
    </ul>
</div>
<br>
<br>

<?php echo form_open('nacionalidad/save_edit') ?>
<?php echo form_hidden('idnacionalidad', $nacionalidad['idnacionalidad']) ?>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Id:</label>
    <div class="col-md-10">
        <?php echo form_input('idnacionalidad', $nacionalidad['idnacionalidad'], array("disabled" => "disabled", 'placeholder' => 'Idnacionalidads')); ?>
    </div>
</div> 

<div class="form-group row">
    <label class="col-md-2 col-form-label">Nombre:</label>
    <div class="col-md-10">
        <?php echo form_input('nombre', $nacionalidad['nombre'], array('placeholder' => 'Nombre de la nacionalidad')); ?>
    </div>
</div> 

<?php echo form_close(); ?>
</body>
</html>
