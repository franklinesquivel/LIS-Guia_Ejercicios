<?php 

    $minimo    = $_GET["minimo"];
    $maximo    = $_GET["maximo"];
    $intervalo = $_GET["intervalo"];
    $opcion    = $_GET["opcion"];

    if (is_numeric($minimo) && is_numeric($maximo) && is_numeric($intervalo) && is_numeric($opcion)){

        if ($minimo > $maximo)
            echo "<div class='alert alert-danger px-3' role='alert'> Error: El valor minimo debe de ser menor que el maximo </div>";
        else if ($intervalo < 0)
            echo "<div class='alert alert-danger px-3' role='alert'> Error: El intervalo debe de ser mayor que 0 </div>";
        else{
            $resultados = "<div class='container-fluid bg-secondary py-3'>";

            // Opcion asendente
            if ($opcion == 1){
                $usoLimite = false;

                for ($i = $minimo; $i <= $maximo ; $i += $intervalo ) { 
                    if ($i == $minimo)
                        $resultados .= "<span class='badge rounded-circle bg-danger text-white intervalo'>" . $i . "</span>";
                    else if ($i == $maximo){
                        $resultados .= "<span class='badge rounded-circle bg-danger text-white intervalo'>" . $i . "</span>";
                        $usoLimite = true;
                    }
                    else
                        $resultados .= "<span class='badge rounded-circle bg-info text-white intervalo'>" . $i . "</span>";
                }

                if(!$usoLimite)
                    $resultados .= "<span class='badge rounded-circle bg-danger text-white intervalo'>" . $maximo . "</span>";

            } else if($opcion == 2){ // Opcion decendente
                $usoLimite = false;

                for ($i = $maximo; $i >= $minimo ; $i -= $intervalo ) { 
                    if ($i == $maximo)
                        $resultados .= "<span class='badge rounded-circle bg-danger text-white intervalo'>" . $i . "</span>";
                    else if ($i == $minimo){
                        $resultados .= "<span class='badge rounded-circle bg-danger text-white intervalo'>" . $i . "</span>";
                        $usoLimite = true;
                    } else
                        $resultados .= "<span class='badge rounded-circle bg-info text-white intervalo'>" . $i . "</span>";
                }

                if(!$usoLimite)
                    $resultados .= "<span class='badge rounded-circle bg-danger text-white intervalo'>" . $minimo . "</span>";

            }

            $resultados .= "</div>";
            echo $resultados;
        }

    } else
        echo "<div class='alert alert-danger px-3' role='alert'> Error: Todos los campos deben de ser numeros </div>";
?>