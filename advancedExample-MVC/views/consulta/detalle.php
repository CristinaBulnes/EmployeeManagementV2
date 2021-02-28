<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="container">
    <?php require 'views/header.php'; ?>
        <h2>Detalle de <?php echo $this->alumno->matricula;?></h2>
        <div class="alert mb-3"><?php echo $this->mensaje;?></div>
        <form action="<?php echo constant('URL');?>consulta/actualizarAlumno" method="POST">
        <div class="mb-3">
            <label for="matricula" class="form-label">Matricula</label>
            <input type="text" name="matricula" id="matricula" class="form-control" value=<?php echo "{$this->alumno->matricula}";?> disabled>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value=<?php echo "{$this->alumno->nombre}";?>>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value=<?php echo "{$this->alumno->apellido}";?>>
        </div>
        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value="Modificar alumno">
        </div>
        </form>
    <?php require 'views/footer.php'; ?>
</body>
</html>