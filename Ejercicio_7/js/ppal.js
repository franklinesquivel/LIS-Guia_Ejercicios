var btnEnviar = document.getElementById("btnEnviar");
btnEnviar.addEventListener("click", function (event) {
    var regex = [/^\w\d?/i, /^\d+/];
    var campos = [];
    var cuota = document.getElementById("txtCuota").value;
    for (var i = 0; i < 5; i++) {
        campos.push(document.getElementById("txtAsignatura_" + (i + 1)).value);

        if (regex[0].test(campos[i]) == false) {
            event.preventDefault();
            alert("Llena todos los campos");
            break;
        } else {
            if (regex[1].test(cuota) == false) {
                event.preventDefault();
                alert("Solo se permiten valores numèricos en la cuota del estudiante");
                break;
            } else if (cuota <= 59 || cuota >= 250) {
                event.preventDefault();
                alert("La mensualidad debe estar entre $59 y $250");
                break;
            }

        }
    }



});
