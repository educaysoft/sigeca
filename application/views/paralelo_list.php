<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* Estilo para la tabla */
    #mydatac {
        width: 50%;
        margin: auto;
    }

    /* Estilos para las filas de la tabla */
    #mydatac tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Estilo para el botón de regreso */
    .btn-regresar {
        margin-top: 20px;
        text-align: center;
    }

    /* Estilos para los botones */
    .btn-regresar a {
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
        background-color: #6c757d;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-regresar a:hover {
        background-color: #495057;
    }
</style>

<div class="row justify-content-center">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h3>Documento_estado - Listar</h3>
            </div>

            <table class="table table-striped table-bordered table-hover" id="mydatac">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data"></tbody>
            </table>
        </div>
    </div>
</div>

<!-- Botón de Regreso -->
<div class="row justify-content-center btn-regresar">
    <div class="col-md-12">
        <a href="<?php echo site_url('paralelo'); ?>">Regresar</a>
    </div>
</div>

<div class="modal fade" id="Modal_pdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="height: 800px;">
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var mytabla = $('#mydatac').DataTable({
            "ajax": {
                url: '<?php echo site_url('paralelo/paralelo_data') ?>',
                type: 'GET'
            },
        });

        $('#show_data').on('click', '.item_ver', function() {
            var id = $(this).data('idparalelo');
            var retorno = $(this).data('retorno');
            window.location.href = retorno + '/' + id;
        });
    });
</script>