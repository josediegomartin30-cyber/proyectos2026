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
        <form action="<?= base_url('modificar_ciudadanos'); ?>" method="post">
            <label for="txt_dpi" class="form-label">DPI</label>
            <input type="number" name="txt_dpi" id="txt_dpi " class="form-control" value="<?=$datos['dpi'];?>">
            <label for="txt_apellido" class="form-label">Apellido</label>
            <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" value="<?=$datos['apellido'];?>" >
            <label for="txt_nombre" class="form-label">nombre</label>
            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control"  value="<?=$datos['nombre'];?>">

            <label for="txt_direccion" class="form-label">direccion</label>
            <input type="text" name="txt_direccion" id="txt_direccion" class="form-control"  value="<?=$datos['direccion'];?>">
            <label for="txt_casa" class="form-label">Telefono de casa</label>
            <input type="text" name="txt_casa" id="txt_casa" class="form-control"  value="<?=$datos['tel_casa'];?>">
            <label for="txt_movil" class="form-label">Telefono movil</label>
            <input type="text" name="txt_movil" id="txt_movil" class="form-control"  value="<?=$datos['tel_movil'];?>">

            <label for="txt_email" class="form-label">Email</label>
            <input type="text" name="txt_email" id="txt_email" class="form-control"  value="<?=$datos['email'];?>">
            <label for="txt_nacimiento" class="form-label">Fecha de nacimiento</label>
            <input type="text" name="txt_nacimiento" id="txt_nacimiento" class="form-control"  value="<?=$datos['fechanac'];?>">

            <label for="txt_academico" class="form-label">nivel academico</label>
            <input type="text" name="txt_academico" id="txt_academico" class="form-control"  value="<?=$datos['cod_nivel_acad'];?>">
            <label for="txt_muni" class="form-label"> codigo muni </label>
            <input type="text" name="txt_muni" id="txt_muni" class="form-control"  value="<?=$datos['cod_muni'];?>">
            <label for="txt_contraseña" class="form-label">Contraseña</label>
            <input type="text" name="txt_contraseña" id="txt_contraseña" class="form-control"  value="<?=$datos['contra'];?>">
            <button type="submit" class="btn btn-primary form-control mt-2">Guardar</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>