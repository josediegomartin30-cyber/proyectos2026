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
        <form action="<?= base_url('modificar_municipios'); ?>" method="post">
            <label for="txt_muni" class="form-label">Código de municipios</label>
            <input type="number" name="txt_muni" id="txt_muni " class="form-control" value="<?=$datos['cod_muni'];?>">
            <label for="txt_nombre" class="form-label">Nombre del municipio</label>
            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?=$datos['nombre_municipio'];?>" >
            <label for="txt_departamento" class="form-label">Codigo de departamento</label>
            <input type="text" name="txt_departamento" id="txt_departamento" class="form-control"  value="<?=$datos['cod_depto'];?>">
            <button type="submit" class="btn btn-primary form-control mt-2">Guardar</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>