<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trabajo de LIS</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">

  </head>

  <body>

    <div class="imagen container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="display-3 text-center text-white mt-4">Repeticion de numeros</h1>
          </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <span class="navbar-brand">LIS</span>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="#">Inicio</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="../Ejercicio_5/">Ejercicio 5</a>
            </li>

            <li class="nav-item active">
              <span class="nav-link">Ejercicio 6</span>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../Ejercicio_7/">Ejercicio 7</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container my-4 d-flex justify-content-center">

      <div class="row">

        <div class="col-12 card p-0" >
          <img class="card-img-top" src="img/bosque.png" alt="Card image cap">
  
          <form id="formNumeros">
  
          <div class="card-body">
            
              <h2 class="text-center">Numeros:</h2>
  
              <div class="px-3">

                  <div class="form-group">
                      <label for="txtMinimo">Numero de inicio:</label>
                      <input id="txtMinimo" name="minimo" class="form-control" max="9" value="1" type="number">
                  </div>
  
                  <div class="form-group">
                      <label for="txtMaximo">Numero de fin:</label>
                      <input id="txtMaximo" name="maximo" class="form-control" min="2" value="10" type="number">
                  </div>
          
                  <div class="form-group">
                      <label for="txtIntervalo">Intervalos:</label>
                      <input id="txtIntervalo" name="intervalo" class="form-control" min="1" value="1" type="number">
                  </div>

              </div>
      
          </div>
  
          <div class="card-footer text-muted">
              <div class="btn-group" role="group" aria-label="Opcion de accion">
                <button id="btnAcen" type="submit" class="btn btn-primary" type="submit">Acendente</button>
                <button id="btnDesn" type="submit" class="btn btn-danger" type="submit">Decendente</button>
              </div>
          </div>
  
        </form>
  
        </div>

      </div>
      
    </div>
  
    <!-- /.container -->
    <div class="container-fluid p-0 m-0 border-top" id="repeticiones"></div>

    <footer class="py-2 bg-info">
      <div class="container">
        <p class="m-0 text-center text-white">Universidad Don Bosco <small>PILET</small></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script>
      $(document).ready(function(){
        // Obtenemos todos los obj importantes
        var $txtMinimo    = $('#txtMinimo');
        var $txtMaximo    = $('#txtMaximo');
        var $txtIntervalo = $('#txtIntervalo');
        var $btnAcen      = $('#btnAcen');
        var $btnDesn      = $('#btnDesn');
        var $repeticiones = $('#repeticiones');
        var $formNumeros  = $('#formNumeros');

        function Intervalos(informacion) {
          $.get("php/ObtenerNumeros.php", informacion, function(datos){
            $repeticiones.html(datos);
          })
          .fail(function(){
            $repeticiones.html("<div class='alert alert-danger' role='alert'> Error: Ha ocurrido un error inesperado </div>");
          });
        }

        // Al cambiar de valores
        $txtMinimo.change(function(){
          var min = $(this).val();

          if (!isNaN(min)){
            $txtMaximo.attr("min", parseInt(min) + 1);
          }
        });

        $txtMaximo.change(function(){
          var max = $(this).val();

          if (!isNaN(max)){
            $txtMinimo.attr("max", parseInt(max) - 1);
          }
        });

        $btnAcen.click(function(){
          var info = $formNumeros.serialize() + "&opcion=1";
          Intervalos(info);
          return false;
        });

        $btnDesn.click(function(){
          var info = $formNumeros.serialize() + "&opcion=2";
          Intervalos(info);
          return false;
        });
      });
    </script>

  </body>

</html>
