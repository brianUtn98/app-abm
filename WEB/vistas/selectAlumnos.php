<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="../css/estilos.css" rel="stylesheet">
        <title>
            Alumnos
        </title>
    </head>
<body>

<script>
    function detalleAlumno(id){
        window.location.replace(`detalleDeAlumno.php?id_alumno=${id}`);
    }
</script>
<?php
include '../bd/conect.php';

$SQL = "SELECT * FROM alumnos";
$CONT=0;
if(!$respuesta=$con->query($SQL)){
    echo $con->error;
}
    echo '<h1 class="display-20">';
    echo '<div align="center" style="color:#626D80">Alumnos</div>';
    echo '</h1>';
    echo '<hr>';
    echo '<div class="border">';
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
    while($fila =$respuesta->fetch_assoc()){
        $CONT++;
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
        echo '<td> <button type="button" class="btn btn-light" onClick=detalleAlumno('.$fila['id_alumno'].')>Ver detalle</button> </td>';
        echo '</tr>'; 
    }
        echo '</tbody>';
    echo '</table>';
    echo '<h6 class="display-20"> Registros leídos: '.$CONT;
    echo '</div>';
      
?>
    
</body>

</html>
