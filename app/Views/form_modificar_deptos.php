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
    <div class="container">
        <form action="<?= base_url('modificar_vwdeptosregiones'); ?>" method="post">
            <label for="txt_depto" class="form-label">Código de Departamentos</label>
            <input type="number" name="txt_depto" id="txt_depto " class="form-control" value="<?=$datos['cod_depto'];?>">
            <label for="txt_nombredepto" class="form-label">Nombre de Departamentos</label>
            <input type="text" name="txt_nombredepto" id="txt_nombredepto" class="form-control" value="<?=$datos['nombre_depto'];?>" >
            <label for="txt_region" class="form-label">Codigo de region</label>
            <input type="text" name="txt_region" id="txt_region" class="form-control"  value="<?=$datos['cod_region'];?>">
            <label for="txt_nombre" class="form-label">nombre</label>
            <input type="text" name="txt_dnombre id="txt_nombre" class="form-control"  value="<?=$datos['nombre'];?>">
            <button type="submit" class="btn btn-primary form-control mt-2">Guardar</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>