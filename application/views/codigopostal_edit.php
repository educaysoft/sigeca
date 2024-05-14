<?php echo form_open('codigopostal/save_edit') ?>
<?php echo form_hidden('idcodigopostal', $codigopostal['idcodigopostal']) ?>
<h2> <?php echo $title; ?></h2>
<hr />

<div class="form-group row">
  <label class="col-md-2 col-form-label">Id codigopostal</label>
  <div class="col-md-10">
    <?php echo form_textarea('idcodigopostal', $codigopostal['idcodigopostal'], array('placeholder' => 'Idcodigopostal')) ?>
  </div>
</div>

<div class="form-group row">
  <label class="col-md-2 col-form-label"> Nombre:</label>
  <div class="col-md-10">
    <?php echo form_input('nombre', $codigopostal['nombre'], array('placeholder' => 'Nombre codigopostal')) ?>
  </div>
</div>

<table>
  <tr>
    <td colspan="2">
      <hr><?php echo form_submit('submit', 'Guardar'); ?> <?php echo anchor('codigopostal', 'Atras') ?>
    </td>
  </tr>
</table>

<?php echo form_close(); ?>