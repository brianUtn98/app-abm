<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../css/estilos.css" rel="stylesheet">
    <script language="JavaScript" src="js/validarFormulario.js"> </script>
    <title>
        Formulario de ingreso - Alumnos
    </title>
</head>

<body class="fondo">
    <h1 class="display-20">
        <div align="center" style="color:#626D80">Ingrese un alumno</div>
    </h1>
    <hr>
    <div class="border">
        <p>
        <form action="../bd/ingresoAlumnos.php" method="post" name="formalumno">
            <div class="form-group row">
                <label><br>
                    <h6 class="display-9">Identidad</h6>
                </label>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" id='nombre' name='nombre'>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Apellido" id='apellido' name='apellido'>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Legajo" id='legajo' name='legajo'>
                </div>
            </div>
            <div class="form-group row">
                <p>
                    <label><br>
                        <h6 class="display-9">Direccion</h4>
                    </label>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Calle" id='calle' name='calle'>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Numero" id='numeroCalle' name='numeroCalle'>
                </div>
                </p>
            </div>
            <div class="form-group row">
                <p>
                    <label><br>
                        <h6 class="display-9">Contacto</h6>
                    </label>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Telefono" id='telefono' name='telefono'>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Email" id='email' name='email'>
                </div>
                </p>
            </div>
            <div class="form-group row">
                <p>
                    <label><br>
                        <h6 class="display-9">Materias aprobadas</h6>
                    </label>
                <div class="col">
                    <select id="inputState" class="form-control" id='materiasAprobadas' name='materiasAprobadas'>
                        <option selected value="0">0</option>
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

        </form>
        </p>
    </div>
</body>

</html>