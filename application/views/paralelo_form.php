<h2><?php echo $title; ?></h2>
<hr />

<?php echo form_open("paralelo/save", array('class' => 'form-horizontal')) ?>
<?php echo form_hidden("idparalelo")  ?>

<div class="table-responsive">
    <table class="table table-bordered" style="width: 50%;">
        <tr>
            <td>Nombre</td>
            <td><?php echo form_input("nombre", "", array("class" => "form-control", "placeholder" => "Nombre de paralelo")) ?></td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
                <?php echo form_submit("submit", "Guardar", array("class" => "btn btn-primary")); ?>
                <?php echo anchor("paralelo", "Atras", array("class" => "btn btn-secondary")); ?>
            </td>
        </tr>
    </table>
</div>

<?php echo form_close(); ?>