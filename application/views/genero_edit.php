<?php echo form_open('genero/save_edit') ?>
<?php echo form_hidden('idgenero',$genero['idgenero']) ?>
<h2> <?php echo $title; ?></h2>
<hr />
<div class="form-group row">
    <label class="col-md-2 col-form-label"> Id:</label>
	<div class="col-md-10">

  <?php echo form_input('idgenero',$genero['idgenero'],array('placeholder'=>'Idgenero')) ?>
 
	</div> 
</div> 
 
<div class="form-group row">
    <label class="col-md-2 col-form-label"> Nombre:</label>
	<div class="col-md-10">
 
  <?php echo form_input('nombre',$genero['nombre'],array('placeholder'=>'Nombre genero')) ?>

	</div> 
</div> 

<div class="form-group row">
	<div class="col-md-10">
    <hr><?php echo form_submit("submit", "Guardar"); ?><?php echo anchor("genero","Atras") ?>
</div>
</div>
<?php echo form_close(); ?>

