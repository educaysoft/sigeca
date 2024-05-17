<?php echo form_open('paralelo/save_edit', array('class' => 'form-horizontal')) ?>
<?php echo form_hidden('idparalelo', $paralelo['idparalelo']) ?>
<h2><?php echo $title; ?></h2>
<hr />

<div class="table-responsive">
  <table class="table table-bordered">
    <tr>
      <td>Id paralelo</td>
      <td>
        <?php
        $eys_arrinput = array('name' => 'idparalelo', 'value' => $paralelo['idparalelo'], 'readonly' => 'true', 'class' => 'form-control', 'style' => 'width:500px');
        echo form_input($eys_arrinput);
        ?>
      </td>
    </tr>
    <tr>
      <td>Nombre:</td>
      <td>
        <?php
        $eys_arrinput = array('name' => 'nombre', 'value' => $paralelo['nombre'], 'class' => 'form-control', 'style' => 'width:500px');
        echo form_input($eys_arrinput);
        ?>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <hr>
        <?php echo form_submit('submit', 'Guardar', array('class' => 'btn btn-primary')); ?>
        <?php echo anchor('paralelo', 'Atras', array('class' => 'btn btn-secondary')); ?>
      </td>
    </tr>
  </table>
</div>

<?php echo form_close(); ?>