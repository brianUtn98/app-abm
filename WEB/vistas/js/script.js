function detalleAlumno(id) {
    window.location.replace(`detalleDeAlumno.php?id_alumno=${id}`);
}

function modificarAlumno(id) {
    window.location.replace(`modificarAlumno.php?id_alumno=${id}`);
}

function eliminarAlumno(id) {
    if (confirm("¿Esta seguro que desea borrar este alumno?")) {
        window.location.replace(`../bd/eliminarAlumno.php?id_alumno=${id}`);
    }
}

function contacto() {
    window.location.replace("contacto.php");
}