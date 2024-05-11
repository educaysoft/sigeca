<div id="eys-nav-i">

<h3 style="text-align: left; margin-top:-10px;"> <?php echo $title;  ?></h3>
<?php echo form_open('sexo/save_edit') ?>
<ul>
        <li> <?php echo anchor('genero/elprimero/', 'primero'); ?></li>
        <li> <?php echo anchor('genero/siguiente/'.$genero['idgenero'], 'siguiente'); ?></li>
        <li> <?php echo anchor('genero/anterior/'.$genero['idgenero'], 'anterior'); ?></li>
        <li style="border-right:1px solid green"><?php echo anchor('genero/elultimo/', 'Último'); ?></li>
        <li> <?php echo anchor('genero/add', 'Nuevo'); ?></li>
        <li> <?php echo anchor('genero/edit/'.$genero['idgenero'],'Edit'); ?></li>
        <li style="border-right:1px solid green"> <?php echo anchor('genero/delete/'.$genero['idgenero'],'Delete'); ?></li>
        <li> <?php echo anchor('genero/listar/','Listar'); ?></li>
</ul>
</div>
<br>

<?php echo form_hidden('idgenero',$genero['idgenero']) ?>
<div class="form-group row">
    <label class="col-md-2 col-form-label"> Id:</label>
	<div class="col-md-10">

     <?php echo form_input('idgenero',$genero['idgenero'],array("disabled"=>"disabled",'placeholder'=>'Idgeneros')) ?>
 
	</div> 
</div> 
 
<div class="form-group row">
    <label class="col-md-2 col-form-label"> Nombre:</label>
	<div class="col-md-10">
 
     <?php echo form_input('nombre',$genero['nombre'],array("disabled"=>"disabled",'placeholder'=>'nombre')) ?>

	</div> 
</div> 
<?php echo form_close(); ?>





</body>









</html>
