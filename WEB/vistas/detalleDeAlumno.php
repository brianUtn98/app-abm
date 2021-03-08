
<html>
    <body class="fondo">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../css/estilos.css" rel="stylesheet">
    <script language="JavaScript" src="js/script.js"> </script>
    </head>
        <?php
        include '../bd/conect.php';
        $id_alumno=$_REQUEST['id_alumno'];
        $SQL = "SELECT * FROM alumnos WHERE id_alumno=$id_alumno";

        if(!$respuesta=$con->query($SQL)){
            echo $con->error;
        }
        echo '<div class="border">';
        echo '<div align="center"> <img src="recursos/usuario.png" widht=100 height=100> </div>';
        echo '<hr>';
        echo '<table class="table">
        <thead>         
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Legajo</th>
        <th scope="col">Calle</th>
        <th scope="col">Numero</th>
        <th scope="col">Telefono</th>
        <th scope="col">Mail</th>
        <th scope="col">Materias</th>
        <th scope="col"></th>
        </tr>
        </thead>';
        echo '<tbody>';

        $fila = $respuesta->fetch_assoc();
        echo '<tr>';
        echo '<th scope="row">'.$fila['id_alumno'].'</th>';
        echo '<td>'.$fila['nombre'].'</td>';
        echo '<td>'.$fila['apellido'].'</td>';
        echo '<td>'.$fila['legajo'].'</td>';
        echo '<td>'.$fila['calle'].'</td>';
        echo '<td>'.$fila['numero'].'</td>';
        echo '<td>'.$fila['telefono'].'</td>';
        echo '<td>'.$fila['mail'].'</td>';
        echo '<td>'.$fila['materias'].'</td>';
        echo '</tr>'; 
        echo '</table>';
        echo '<button type="button" class="btn btn-light" onClick=modificarAlumno('.$fila['id_alumno'].')>Modificar</button>';
        echo '   ';
        echo '<button type="button" class="btn btn-light" onClick=eliminarAlumno('.$fila['id_alumno'].')>Eliminar</button>';
        echo '</div>';
        ?>
    </body>
</html>