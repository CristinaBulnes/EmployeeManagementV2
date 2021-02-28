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
        <h2>Seccion de consulta</h2>
        <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">Matricula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($this->datos as $row) {
                echo "<tr>
                        <td>{$row->matricula}</th>
                        <td>{$row->nombre}</td>
                        <td>{$row->apellido}</td>
                        <td><a href=>Editar</a></td>
                        <td><a href=>Eliminar</a></td>
                    </tr>";
            }
            ?>
            </tbody>
        </table>
    <?php require 'views/footer.php'; ?>
</body>
</html>