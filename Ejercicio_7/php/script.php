<?php

$nombre = array();
$casilla = array();
$txt = "txtAsignatura_";
$chk = "chkAsignatura_";
$precio = array();
$mensualidad = $_POST["txtCuota"];
$i=1;
$lab = 0;
//Llenado de materias
while($i<=5){
    $nombre[$i-1] = $_POST[$txt.$i];
    $i++;
}
//Llenado de checkbox
$k = 1;
while($k<=5){
    if (isset($_POST[$chk.$k]) && $_POST[$chk.$k]=="on"){
        
        $casilla[$k-1] = "Si";
        $precio[$k-1] = 33;
        $lab++;
        
    }else{
        $casilla[$k-1] = "No";
        $precio[$k-1] = 0;
    }
    $k++;
}

?>

    <html>

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
               <h1 class="text-center">Resultados</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Materia #</th>
                            <th scope="col">Materia</th>
                            <th scope="col">Laboratorio</th>
                            <th scope="col">Precio laboratorio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            
                            for ($m=0;$m<5;$m++){
                                echo "<tr>";
                                echo "<th scope='row'>".($m+1)."</td>";
                                echo "<td>".$nombre[$m]."</th>";
                                echo "<td>".$casilla[$m]."</td>";
                                echo "<td> $".$precio[$m]."</td>";
                                echo "</tr>";
                            }
                        
                        
                            ?>
                    </tbody>
                </table>
                <h4>Cuota base: $<?php echo "70" ?></h4>
                <br>
                <h4>Mensualidad: $<?php echo $mensualidad?></h4>
                <br>
                <h4>Cantidad de laboratorios: <?php echo $lab?> </h4>
                <h4>Precio total de laboratorios: $<?php echo ($lab*33)?> </h4>
                <br>
                <h4>Total a pagar: $<?php echo (70+$mensualidad+($lab*33))?></h4>
            </div>
        </div>
    </body>

    </html>
    <?php

?>
