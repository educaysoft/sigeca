<?php echo form_open('tipoevento/save_edit') ?>
<?php echo form_hidden('idtipoevento',$tipoevento['idtipoevento']) ?>
<h2> <?php echo $title; ?></h2>
<hr />

  <div class="form-group row">
    <label class="col-md-2 col-form-label"> Id tipoevento:</label>
	<div class="col-md-10">
	<?php
      echo form_input('idtipoevento',$tipoevento['idtipoevento'],array('placeholder'=>'Idtipoevento')); ?>
	</div> 
  </div> 


  <div class="form-group row">
    <label class="col-md-2 col-form-label"> Nombre:</label>
	<div class="col-md-10">
	<?php
       echo form_input('nombre',$tipoevento['nombre'],array('placeholder'=>'Nombre tipoevento')); ?>
	</div> 
  </div> 


  <table> 
 <tr>
 <td colspan="2"> <hr><?php echo form_submit('submit', 'Guardar'); ?> <?php echo anchor('tipoevento','Atras') ?></td>
 </tr>
  </table>
  <?php echo form_close(); ?>
