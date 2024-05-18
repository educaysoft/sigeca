<!--Archivo: modeevaluacion_record.php -->
<!--Modulo: modoevaluacion -->
<!--Descripción: vista que permite visualizar la información del modo de evaluación -->
<!--Autor: Stalin Francis -->
<!--Fecha: Última evaluación: Sábado 4 febrero 2023 -->

<?php
$base_url = site_url('modoevaluacion');
$links = [
    'elprimero' => 'Primero',
    'siguiente' => 'Siguiente',
    'anterior' => 'Anterior',
    'elultimo' => 'Último',
    'add' => 'Nuevo',
    'edit' => 'Editar',
    'listar' => 'Listar'
];
?>

<div id="eys-nav-i" class="mt-4 p-2">
    <h3 class="mt-3 p-3"><?php echo $title; ?></h3>
    <ul class="list-inline border rounded">
        <?php foreach ($links as $url => $name): ?>
            <?php if ($url === 'edit' && !isset($modoevaluacion['idmodoevaluacion'])) continue; ?>
            <li class="list-inline-item">
                <a href="<?php echo $base_url . '/' . $url . (isset($modoevaluacion['idmodoevaluacion']) ? '/' . $modoevaluacion['idmodoevaluacion'] : ''); ?>" class="text-decoration-none text-dark">
                    <?php echo $name; ?>
                </a>
            </li>
        <?php endforeach; ?>
        <?php if (isset($modoevaluacion['idmodoevaluacion'])) : ?>
            <li class="list-inline-item border-left pl-3">
                <a href="#" onclick="openForm(<?php echo $modoevaluacion['idmodoevaluacion']; ?>)" class="text-decoration-none text-dark">Eliminar / Inhabilitar</a>
            </li>
        <?php endif; ?>
    </ul>
</div>

<script>
    function openForm(id) {
        document.getElementById('confirmationId').value = id;
        document.getElementById('confirmationForm').style.display = 'block';
    }

    function closeForm() {
        document.getElementById('confirmationForm').style.display = 'none';
    }

    function submitAction(action) {
        document.getElementById('confirmationAction').value = action;
        if (action === 'eliminar') {
            var confirmar = confirm("¿Estás seguro de que deseas eliminar este elemento?");
            if (confirmar) {
                document.getElementById('confirmation').action = "<?php echo site_url('modoevaluacion/delete/'); ?>" + document.getElementById('confirmationId').value;
                document.getElementById('confirmation').submit();
                window.location.href = "<?php echo site_url('modoevaluacion/elprimero'); ?>";
            }
        } else if (action === 'inhabilitar') {
            var confirmar = confirm("¿Estás seguro de que deseas inhabilitar este elemento?");
            if (confirmar) {
                document.getElementById('confirmation').action = "<?php echo site_url('modoevaluacion/inhabilitar_datos/'); ?>" + document.getElementById('confirmationId').value;
                document.getElementById('confirmation').submit();
                window.location.href = "<?php echo site_url('modoevaluacion/elprimero'); ?>";
            }
        }
    }
</script>
