<h2> <?php echo $title; ?> </h2>
<hr/>
<?php echo form_open("genero/save") ?>
<?php echo form_hidden("idgenero")  ?> 

<div class="form-group row">
    <label class="col-md-2 col-form-label"> Nombre:</label>
	<div class="col-md-10">
<?php echo form_input("nombre","", array("placeholder"=>"Descripcion de Género: "));  ?>

	</div> 
</div> 

<div class="form-group row">
	<div class="col-md-10">
    <hr><?php echo form_submit("submit", "Guardar"); ?><?php echo anchor("genero","Atras") ?>
</div>
<?php echo form_close();?>

