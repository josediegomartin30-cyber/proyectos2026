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
    <div class="container mt-5">
        <h1 class="mb-4 text-center">BIENVENIDOS</h1>
        <div class="d-grid gap-2 col-6 mx-auto">
            
            <a href="<?= base_url('ciudadanos') ?>" class="btn btn-primary" class="list-group-item list-group-item-action">Ciudadanos</a>
            <a href="<?= base_url('departamentos') ?>" class="btn btn-primary" class="list-group-item list-group-item-action">Departamentos</a>
            <a href="<?= base_url('municipios') ?>" class="btn btn-primary" class="list-group-item list-group-item-action">Municipios</a>
            <a href="<?= base_url('regiones') ?>" class="btn btn-primary" class="list-group-item list-group-item-action">Regiones</a>
            <a href="<?= base_url('nivelesacademicos') ?>" class="btn btn-primary" class="list-group-item list-group-item-action">Niveles
                Académicos</a>
            <a href="<?= base_url('vwdeptosregiones') ?>"class="btn btn-primary" class="list-group-item list-group-item-action">Departamentos y Regiones
               </a>
        </div>
    </div>

  

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>