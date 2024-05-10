<h2> <?php echo $title; ?> </h2>
<hr/>
<?php echo form_open("tipodocu/save") ?>
<?php echo form_hidden("idtipodocu")  ?>
<div class='form-group row'>
    <label class='col-md-2 col-form-label'>Nombre:</label>
    <div class='col-md-10'>
        <?php echo form_input("descripcion","", array("placeholder"=>"Descripcion de tipodocu"))  ?>
    </div>
</div>
<div class = 'form-group row'>
    <div class='col-md-10'> 
        <hr>
        <?php echo form_submit("submit", "Guardar"); ?><?php echo anchor("tipodocu","Atras") ?> 
    </div>
</div>
<?php echo form_close();?>

