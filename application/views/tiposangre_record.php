<div id="eys-nav-i">

<h3 style="text-align: left; margin-top:-10px;"> <?php echo $title;  ?></h3>
<?php echo form_open('tiposangre/save_edit') ?>
    <ul>
        <li> <?php echo anchor('tiposangre/elprimero/', 'primero'); ?></li>
        <li> <?php echo anchor('tiposangre/anterior/'.(isset($tiposangre['idtiposangre']) ? $tiposangre['idtiposangre'] : ''), 'anterior'); ?></li>
        <li> <?php echo anchor('tiposangre/siguiente/'.(isset($tiposangre['idtiposangre']) ? $tiposangre['idtiposangre'] : ''), 'siguiente'); ?></li>
        <li style="border-right:1px solid green"><?php echo anchor('tiposangre/elultimo/', 'Último'); ?></li>
        <li> <?php echo anchor('tiposangre/add', 'Nuevo'); ?></li>
        <li> <?php echo anchor('tiposangre/edit/'.(isset($tiposangre['idtiposangre']) ? $tiposangre['idtiposangre'] : ''),'Edit'); ?></li>
        <li style="border-right:1px solid green"> <?php echo anchor('tiposangre/delete/'.(isset($tiposangre['idtiposangre']) ? $tiposangre['idtiposangre'] : ''),'Delete'); ?></li>
        <li> <?php echo anchor('tiposangre/listar/','Listar'); ?></li>
    </ul>
</div>
<br>


<?php echo form_hidden('idtiposangre',$tiposangre['idtiposangre']) ?>
<div>
  <label class="col-md-2 col-form-label">Id tipo doc:</label>
  <div class="col-md-10">
    <?php echo form_input('idtiposangre',$tiposangre['idtiposangre'],array("disabled"=>"disabled",'placeholder'=>'Idtiposangre'))?>
    
  </div>
</div>
<?php echo form_close(); ?>





</body>









</html>
