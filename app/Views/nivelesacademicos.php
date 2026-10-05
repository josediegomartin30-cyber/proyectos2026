<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel Academico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid">
        <h1>Nivel Academico</h1>
        <a href="<?= base_url('/') ?>" class="btn btn-primary mb-4">
            Menú
        </a>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Nivel
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Nivel</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url('agregar_nivelesacademicos');?>" method="post">
                            <label for="txt_nivel" class="form-label">Código de nivel academico</label>
                            <input type="number" name="txt_nivel" id="txt_nivel " class="form-control">
                            <label for="txt_nombre" class="form-label">Nombre</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                            <label for="txt_descripcion" class="form-label">Descripcion</label>
                            <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control">
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
                    <th>Código de nivel academico</th>
                    <th class="w-25">Nombre</th>
                    <th class="w-75">Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $nivel) {
            ?>
                <tr>
                    <td> <?=$nivel['cod_nivel_acad'];?> </td>
                    <td> <?=$nivel['nombre'];?> </td>
                    <td> <?=$nivel['descripcion'];?> </td>
                    <td>
                        <a href="<?=base_url('buscar_nivelesacademicos/').$nivel['cod_nivel_acad'];?>">
                        <i class="bi bi-pencil-square"></i>
                        </a>

                         <a href="<?=base_url('eliminar_nivelesacademicos/').$nivel['cod_nivel_acad'];?>">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php
                }
            ?>
            </tbody>

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>