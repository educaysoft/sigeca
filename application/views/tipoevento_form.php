<h2> <?php echo $title; ?> </h2>
<hr/>
<?php echo form_open("tipoevento/save", array('id'=>'eys-form')); ?>
<?php echo form_hidden("idtipoevento");  ?>

<table>

<div class="form-group row">
    <label class="col-md-2 col-form-label"> Id tipoevento:</label>
	<div class="col-md-10">
<?php echo form_input("idtipoevento","", array("placeholder"=>"Id tipoevento"));  ?>
	</div> 
</div>


<div class="form-group row">
    <label class="col-md-2 col-form-label"> Nombre:</label>
	<div class="col-md-10">
<?php echo form_input("nombre","", array("placeholder"=>"Descripcion del Evento"));  ?>
	</div> 
</div> 

<div id="eys-nav-i">

	<ul>
   	 	<li> <a href="javascript:{}" onclick="document.getElementById('eys-form').submit(); return false;">Guardar</a></li>
    		<li> <?php echo anchor('tipoevento', 'Atras'); ?></li>
	</ul>
</table>
</div> <?php echo form_close();?>