<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento_estado - Listar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
        }

        /* Estilo para la tabla */
        #mydatac {
            width: 100%;
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
            transition: background-color 0.3s;
        }

        .btn-regresar a:hover {
            background-color: #495057;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3>Documento_estado - Listar</h3>
                <table class="table table-striped table-bordered table-hover" id="mydatac">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th style="text-align: right;">Acciones</th>
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


    <script>
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
</body>

</html>