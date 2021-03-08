<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="../css/estilos.css" rel="stylesheet">
        <title>
            Busqueda - Alumnos
        </title>
    </head>

    <body class="menu">
        <div style="margin:20px;">
        <form action="vistaBusqueda.php" method="post" name="navBusquedaForm" target="busquedaFiltrada">
          <div class="row">
               <div class="col">
                <label for="criterio">Filtrar por...</label>
                      <select id="criterio" class="form-control" name="criterio">
                        <option selected value="legajo">Legajo</option>
                        <option value="nombre">Nombre</option>
                        <option value="apellido">Apellido</option>
                      </select>
             </div>
            <div class="col">
                  <label for="inputCriterio">Criterio de busqueda</label>
                  <input type="text" class="form-control" id="inputCriterio" name="inputCriterio">             </div>
           </div>  
           <button type="submit" class="btn btn-primary">Buscar</button>     
        </form>
        <hr>
    </div>
    </body>
</html>