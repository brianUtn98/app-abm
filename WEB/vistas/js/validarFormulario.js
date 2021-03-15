function validarFormulario() {
    let nombre = document.getElementById("nombre").value;
    let apellido = document.getElementById("apellido").value;
    let legajo = document.getElementById("legajo").value;
    let calle = document.getElementById("calle").value;
    let numeroCalle = document.getElementById("numeroCalle").value;
    let telefono = document.getElementById("telefono").value;
    let email = document.getElementById("email").value;
    let mensajeError = new String("");

    if (nombre == "") {
        //  alert("Nombre vacio");
        mensajeError = String(mensajeError.concat("Nombre, "));
    }

    if (apellido == "") {
        // alert("Apellido vacio");
        mensajeError = String(mensajeError.concat("Apellido, "));
    }

    if (legajo == "") {
        // alert("Legajo vacio");
        mensajeError = String(mensajeError.concat("Legajo, "));
    }

    if (calle == "") {
        //alert("Calle vacia");
        mensajeError = String(mensajeError.concat("Calle, "));
    }

    if (numeroCalle == "") {
        // alert("Numero vacio");
        mensajeError = String(mensajeError.concat("Numero, "));
    }

    if (telefono == "") {
        //alert("Telefono vacio");
        mensajeError = String(mensajeError.concat("Telefono, "));
    }

    if (email == "") {
        //  alert("Email vacio");
        mensajeError = String(mensajeError.concat("Mail, "));
    }

    if (mensajeError.length != 0) {
        mensajeError = String(mensajeError.trimEnd());
        mensajeError = String(mensajeError.slice(0, -1));
        mensajeError = String(mensajeError.concat("."));
        alert(`Campos vacíos: ${mensajeError}`);
    } else {
        document.formalumno.submit();
    }
}