<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="../css/estilos.css" rel="stylesheet">
  <script language="JavaScript" src="js/script.js"> </script>
  <script language="JavaScript" src="js/validarFormulario.js"></script>
</head>

<body>
  <?php
  include '../bd/conect.php';
  $id_alumno = $_REQUEST["id_alumno"];

  $SQL = "SELECT nombre,apellido,legajo,calle,numero,telefono,mail,materias FROM alumnos WHERE id_alumno=$id_alumno";

  if (!$respuesta = $con->query($SQL)) {
    echo $con->error;
  }

  $fila = $respuesta->fetch_assoc();
  echo '<div class="border">';
  echo '<form action="../bd/modificarAlumno.php" method="post" name="formalumno">
        <div class="form-group row">
            <label><br><h6 class="display-9">Identidad</h6></label>
          <div class="col">
            <input class="form-control" type="text" id="id_alumno" name="id_alumno" value="' . $id_alumno . '" placeholder="' . $id_alumno . '" readonly>
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" value="' . $fila["nombre"] . '">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Apellido" id="apellido" name="apellido" value="' . $fila["apellido"] . '">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Legajo" id="legajo" name="legajo" value="' . $fila["legajo"] . '">
          </div>
        </div>
        <div class="form-group row">
            <p>
                <label><br><h6 class="display-9">Direccion</h4></label>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Calle" id="calle" name="calle" value="' . $fila["calle"] . '">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Numero" id="numeroCalle" name="numeroCalle" value="' . $fila["numero"] . '">
                  </div>
            </p>
        </div>
        <div class="form-group row">
            <p>
                <label><br><h6 class="display-9">Contacto</h6></label>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Telefono" id="telefono" name="telefono" value="' . $fila["telefono"] . '">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="' . $fila["mail"] . '">
                </div>
            </p>
        </div>
        <div class="form-group row">
            <p>
                <label><br><h6 class="display-9">Materias aprobadas</h6></label>
                <div class="col">
                    <select id="inputState" class="form-control" id="materiasAprobadas" name="materiasAprobadas" value="' . $fila["materias"] . '">
                        <option selected value="' . $fila["materias"] . '">' . $fila["materias"] . '</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>                       
                </div>
                <div class="col"></div>
                <div class="col"></div>
            </p>
        </div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col">
             <input class="btn btn-primary" type="button" value="Cargar" onclick="validarFormulario();">
        </div>
        
      </form>';
  ?>
</body>

</html>