<?php echo form_open('pais/save_edit', array('class' => 'form-horizontal')); ?>
<?php echo form_hidden('idpais', $pais['idpais']); ?>
<h2><?php echo $title; ?></h2>
<hr />

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="idpais" class="control-label">Id país:</label>
        <?php echo form_input(array('name' => 'idpais', 'value' => $pais['idpais'], 'class' => 'form-control', 'placeholder' => 'Id país')); ?>
      </div>
      <div class="form-group">
        <label for="nombre" class="control-label">Nombre:</label>
        <?php echo form_input(array('name' => 'nombre', 'value' => $pais['nombre'], 'class' => 'form-control', 'placeholder' => 'Nombre país')); ?>
      </div>
      <div class="form-group">
        <?php echo form_submit('submit', 'Guardar', array('class' => 'btn btn-primary')); ?>
        <?php echo anchor('pais', 'Atrás', array('class' => 'btn btn-secondary')); ?>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>