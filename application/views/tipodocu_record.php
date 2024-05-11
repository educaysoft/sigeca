<div id="eys-nav-i">
  <h3 style="text-align: left; margin-top:-10px;"> <?php echo $title;  ?></h3>
  <?php echo form_open('tipodocu/save_edit') ?>
    <ul>
      <li> <?php echo anchor('tipodocu/elprimero/', 'primero'); ?></li>
      <li> <?php echo anchor('tipodocu/anterior/'.$tipodocu['idtipodocu'], 'anterior'); ?></li>
      <li> <?php echo anchor('tipodocu/siguiente/'.$tipodocu['idtipodocu'], 'siguiente'); ?></li>
      <li style="border-right:1px solid green"><?php echo anchor('tipodocu/elultimo/', 'Último'); ?></li>
      <li> <?php echo anchor('tipodocu/add', 'Nuevo'); ?></li>
      <li> <?php echo anchor('tipodocu/edit/'.$tipodocu['idtipodocu'],'Edit'); ?></li>
      <li style="border-right:1px solid green"> <?php echo anchor('tipodocu/delete/'.$tipodocu['idtipodocu'],'Delete'); ?></li>
      <li> <?php echo anchor('tipodocu/listar/','Listar'); ?></li>
    </ul>
</div>
<br>
<?php echo form_hidden('idtipodocu',$tipodocu['idtipodocu']) ?>
<div class='form-group row'>
    <label class='col-md-2 col-form-label'>Id:</label>
    <div class='col-md-10'>
      <?php echo form_input('idtipodocu',$tipodocu['idtipodocu'],array("disabled"=>"disabled",'placeholder'=>'Idtipodocus')) ?>
    </div>
</div>
<div class='form-group row'>
      <label class='col-md-2 col-form-label'>Descripción:</label>
      <div class='col-md-2'>
        <?php echo form_input('descripcion',$tipodocu['descripcion'],array("disabled"=>"disabled",'placeholder'=>'descripcion')) ?>
      </div>
</div>
<?php echo form_close(); ?>
</body>
</html>