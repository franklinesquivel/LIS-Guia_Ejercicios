<?php

    if(isset($_POST['validateData'])) {
        $a = is_numeric($_POST['a']) ? is_numeric( $_POST['a'] ) && floor( $_POST['a'] ) != $_POST['a'] ? floatval($_POST['a']) : intval($_POST['a']) : null;
        $b = is_numeric($_POST['b']) ? is_numeric($_POST['b']) && floor($_POST['b']) != $_POST['b'] ? null : intval($_POST['b']) : null;
        
        echo !(is_null($a) || is_null($b)) ? 1 : 0;
    }

    if(isset($_POST['calculateExponent'])) {
        $a = $_POST['a'];
        $auxBase = $_POST['a'];
        $b = $_POST['b'];
        
        if($b == 0) {echo 1; return;}
        if($a == 0) {echo 0; return;}

        if($b > 0){
            for ($i=1; $i < $b; $i++) { 
                $a *= $auxBase;
            }
        }else if($b < 0){
            $b = -$b;
            for ($i=1; $i < $b; $i++) { 
                $a *= $auxBase;
            }
            $a = 1 / $a;
        }

        echo $a;
    }

?>