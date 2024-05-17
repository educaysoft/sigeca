<?php echo form_open('paralelo/save_edit', array('class' => 'form-horizontal')) ?>
<?php echo form_hidden('idparalelo', $paralelo['idparalelo']) ?>
<h2><?php echo $title; ?></h2>
<hr />

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="idparalelo" class="control-label">Id paralelo:</label>
        <?php
        $eys_arrinput = array('name' => 'idparalelo', 'value' => $paralelo['idparalelo'], 'readonly' => 'true', 'class' => 'form-control');
        echo form_input($eys_arrinput);
        ?>
      </div>
      <div class="form-group">
        <label for="nombre" class="control-label">Nombre:</label>
        <?php
        $eys_arrinput = array('name' => 'nombre', 'value' => $paralelo['nombre'], 'class' => 'form-control');
        echo form_input($eys_arrinput);
        ?>
      </div>
      <div class="form-group">
        <?php echo form_submit('submit', 'Guardar', array('class' => 'btn btn-primary')); ?>
        <?php echo anchor('paralelo', 'Atrás', array('class' => 'btn btn-secondary')); ?>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>