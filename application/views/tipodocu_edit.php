<?php echo form_open('tipodocu/save_edit') ?>
<?php echo form_hidden('idtipodocu',$tipodocu['idtipodocu']) ?>
<h2> <?php echo $title; ?></h2>
<hr />
<div class='form-group row'>
    <label class='col-md-2 col-form-label'>Id:</label>
    <div class='col-md-10'>
      <?php echo form_input('idtipodocu',$tipodocu['idtipodocu'],array('placeholder'=>'Idtipodocu')) ?>
    </div>
</div>
<div class="form-group row">
  <label class='col-md-2 col-form-label'>Descripción:</label>
    <div class='col-md-10'>
        <?php echo form_input('descripcion',$tipodocu['descripcion'],array('placeholder'=>'Nombre tipodocu')) ?>
    </div>
</div>
<div class ='form-group row'>
  <div class='col-md-2'> 
    <hr>
    <?php echo form_submit('submit', 'Guardar'); ?> <?php echo anchor('tipodocu','Atras') ?>
  </div>
</div>
<?php echo form_close(); ?>
