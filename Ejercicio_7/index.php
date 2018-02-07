<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio 7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">LIS - Guía de Ejercicios</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">Ejercicio 7</a>
                </li>
                <li>
                    <a href="#">Ejercicio 5</a>
                </li>
                <li>
                    <a href="#">Ejercicio 6</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!--Formulario-->
                <form action="php/script.php" method="POST">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <h2 class="panel-title">Inscripción de materias - Técnico en Computación</h2>
                        </div>
                        <div class="panel-body">
                            <!-- Nombre de las materias -->
                            <div class="form-row col-md-12 form-group">
                                <div class="col-md-8 ">
                                    <input type="text" class="form-control" name="txtAsignatura_1" id="txtAsignatura_1" placeholder="Asignatura N°1">
                                </div>
                                <div class="col-md-4 form-check text-right">
                                    <input class="form-check-input" type="checkbox" name="chkAsignatura_1" id="chkAsignatura_1">
                                    <label class="form-check-label" for="chkAsignatura_1">
                                        ¿Laboratorio?
                                    </label>
                                </div>
                            </div>
                            <div class="form-row col-md-12 form-group">
                                <!-- Nombre de las materias -->
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="txtAsignatura_2" id="txtAsignatura_2" placeholder="Asignatura N°2">
                                </div>
                                <div class="col-md-4 form-check text-right">
                                    <input class="form-check-input" type="checkbox" name="chkAsignatura_2" id="chkAsignatura_2">
                                    <label class="form-check-label" for="chkAsignatura_2">
                                        ¿Laboratorio?
                                    </label>
                                </div>
                            </div>
                            <div class="form-row col-md-12 form-group">
                                <!-- Nombre de las materias -->
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="txtAsignatura_3" id="txtAsignatura_3" placeholder="Asignatura N°3">
                                </div>
                                <div class="col-md-4 form-check text-right">
                                    <input class="form-check-input" type="checkbox" name="chkAsignatura_3" id="chkAsignatura_3">
                                    <label class="form-check-label" for="chkAsignatura_3">
                                        ¿Laboratorio?
                                    </label>
                                </div>
                            </div>
                            <div class="form-row col-md-12 form-group">
                                <!-- Nombre de las materias -->
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="txtAsignatura_4" id="txtAsignatura_4" placeholder="Asignatura N°4">
                                </div>
                                <div class="col-md-4 form-check text-right">
                                    <input class="form-check-input" type="checkbox" name="chkAsignatura_4" id="chkAsignatura_4">
                                    <label class="form-check-label" for="chkAsignatura_4">
                                        ¿Laboratorio?
                                    </label>
                                </div>
                            </div>
                            <div class="form-row col-md-12 form-group">
                                <!-- Nombre de las materias -->
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="txtAsignatura_5" id="txtAsignatura_5" placeholder="Asignatura N°5">
                                </div>
                                <div class="col-md-4 form-check text-right">
                                    <input class="form-check-input" type="checkbox" name="chkAsignatura_5" id="chkAsignatura_5">
                                    <label class="form-check-label" for="chkAsignatura_5">
                                        ¿Laboratorio?
                                    </label>
                                </div>
                            </div>
                            <div class="form-row col-md-12 form-group">
                                <!-- Nombre de las materias -->
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="txtCostoIngreso" placeholder="Costos de Ingreso $70" disabled>
                                </div>
                            </div>
                            <div class="form-row col-md-12 form-group">
                                <!-- Nombre de las materias -->
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="txtCuota" id="txtCuota" placeholder="Cuota del estudiante">
                                </div>
                            </div>
                            <div class="form-row text-center">
                                <button type="submit" class="btn btn-primary" id="btnEnviar">Enviar</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="js/ppal.js"></script>
</body>

</html>
