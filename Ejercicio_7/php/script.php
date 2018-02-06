<?php

$nombre = array();
$casilla = array();
$txt = "txtAsignatura_";
$chk = "chkAsignatura_";
$i=1;
$lab = 0;
while($i<=5){
    $nombre[$i-1] = $_POST[$txt.$i];
    $i++;
}

$k = 1;
while($k<=5){
    if (isset($_POST[$chk.$k]) && $_POST[$chk.$k]=="on"){
        
        $casilla[$k-1] = "Si";
        $lab++;
        
    }else{
        $casilla[$k-1] = "No";
    }
    $k++;
}

for($j=0;$j<5;$j++){
if(isset($nombre[$j]) and strlen(trim($nombre[$j]))>0){
    $bandera = true;
    }else{
        $bandera = false;
        break;
    }
}

if ($bandera == true){

    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Materia</th>
                    <th scope="col">Laboratorio</th>
                    <th scope="col">Costo</th>
                </tr>
            </thead>
            <tbody>
                <?php

  for($h=0;$h<5;$h++){
    echo "<tr>";
  echo "<td>".$nombre[$h]."</td>";
  echo "<td>".$casilla[$h]."</td>";
  echo "<td>@"."Hola"."</td>";
echo "</tr>";
  }
  
  ?>


            </tbody>
        </table>

    </div>

    <?php

}

?>
