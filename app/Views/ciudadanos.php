<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid">
        <h1>Ciudadanos</h1>

        <!-- Button trigger modal -->
        <a href="<?= base_url('/') ?>" class="btn btn-primary mb-4">
            Menú
        </a>
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar ciudadano
        </button>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Ciudadano</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url('agregar_ciudadanos');?>" method="post">
                            <label for="txt_dpi" class="form-label">DPI</label>
                            <input type="number" name="txt_dpi" id="txt_dpi " class="form-control">
                            <label for="txt_apellido" class="form-label">Apellido</label>
                            <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">
                            <label for="txt_nombre" class="form-label">nombre</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                            <label for="txt_direccion" class="form-label">direccion</label>
                            <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">
                            <label for="txt_casa" class="form-label">Telefono de casa</label>
                            <input type="text" name="txt_casa" id="txt_casa" class="form-control">
                            <label for="txt_movil" class="form-label">Telefono movil</label>
                            <input type="text" name="txt_movil" id="txt_movil" class="form-control">

                            <label for="txt_email" class="form-label">Email</label>
                            <input type="text" name="txt_email" id="txt_email" class="form-control">
                            <label for="txt_nacimiento" class="form-label">Fecha de nacimiento</label>
                            <input type="text" name="txt_nacimiento" id="txt_nacimiento" class="form-control">

                            <label for="txt_academico" class="form-label">nivel academico</label>
                            <input type="text" name="txt_academico" id="txt_academico" class="form-control">
                            <label for="txt_muni" class="form-label"> codigo muni </label>
                            <input type="text" name="txt_muni" id="txt_muni" class="form-control">
                            <label for="txt_contraseña" class="form-label">Contraseña</label>
                            <input type="text" name="txt_contraseña" id="txt_contraseña" class="form-control">
                            <button type="submit" class="btn btn-primary form-control mt-2">Guardar</button>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <table class="table table-striped table-bordered w-auto text-center">
            <thead>
                <tr>
                    <th>Dpi</th>
                    <th class="w-25">Apellido</th>
                    <th class="w-25">Nombre</th>
                    <th class="w-25">Direccion</th>
                    <th class="w-25">tel_casa</th>
                    <th class="w-25">Tel_movil</th>
                    <th class="w-25">Email </th>
                    <th class="w-25">Fecha_nac</th>
                    <th class="w-10">Cod_nivel_acad</th>
                    <th class="w-25">Cod_muni</th>
                    <th class="w-25">Contra</th>

                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $ciudadanos) {
            ?>
                <tr>
                    <td> <?=$ciudadanos['dpi'];?> </td>
                    <td> <?=$ciudadanos['apellido'];?> </td>
                    <td> <?=$ciudadanos['nombre'];?> </td>
                    <td> <?=$ciudadanos['direccion'];?> </td>
                    <td> <?=$ciudadanos['tel_casa'];?> </td>
                    <td> <?=$ciudadanos['tel_movil'];?> </td>
                    <td> <?=$ciudadanos['email'];?> </td>
                    <td> <?=$ciudadanos['fechanac'];?> </td>
                    <td> <?=$ciudadanos['cod_nivel_acad'];?> </td>
                    <td> <?=$ciudadanos['cod_muni'];?> </td>
                    <td> <?=$ciudadanos['contra'];?> </td>

                    <td>
                        <a href="<?=base_url('buscar_ciudadanos/').$ciudadanos['dpi'];?>">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <a href="<?=base_url('eliminar_ciudadanos/').$ciudadanos['dpi'];?>">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php
                }
            ?>
            </tbody>

        </table>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>