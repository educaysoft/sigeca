<?php echo form_open('pais/save_edit', array('class' => 'form-horizontal')) ?>
<?php echo form_hidden('idpais', $pais['idpais']) ?>
<h2><?php echo $title; ?></h2>
<hr />

<div class="table-responsive">
  <table class="table table-bordered">
    <tr>
      <td>Id país</td>
      <td>
        <?php
        $eys_arrinput = array('name' => 'idpais', 'value' => $pais['idpais'], 'readonly' => 'true', 'class' => 'form-control', 'style' => 'width: 200px;');
        echo form_input($eys_arrinput);
        ?>
      </td>
    </tr>
    <tr>
      <td>Nombre:</td>
      <td>
        <?php
        $eys_arrinput = array('name' => 'nombre', 'value' => $pais['nombre'], 'class' => 'form-control', 'style' => 'width: 300px;');
        echo form_input($eys_arrinput);
        ?>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <hr>
        <?php echo form_submit('submit', 'Guardar', array('class' => 'btn btn-default')); ?>
        <?php echo anchor('pais', 'Atrás', array('class' => 'btn btn-default')); ?>
      </td>
    </tr>
  </table>
</div>

<?php echo form_close(); ?>