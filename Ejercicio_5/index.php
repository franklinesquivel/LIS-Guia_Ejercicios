<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio N°5</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/function.js"></script>
</head>
<body>

    <nav>
        <div class="nav-wrapper deep-purple darken-1">
        <a href="../" class="brand-logo"><i class="material-icons">home</i> Inicio</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class='active'><a href="./">Ejercicio N° 5</a></li>
            <li><a href="../Ejercicio_6/">Ejercicio N° 6</a></li>
            <li><a href="../Ejercicio_7/">Ejercicio N° 7</a></li>
        </ul>
        </div>
    </nav>

    <div class="container row"><br/>
        <h3 class="center deep-purple-text text-darken-4">Calculo de un exponente! [a<sup>b</sup>]</h3>
        <form name="frmData" id="frmData">
            <div class="input-field col s10 m4 l4 offset-s1 offset-m4 offset-l4">
                <input type="text" name="txtBase" id="txtBase">
                <label for="txtBase">Base [a]</label>
            </div>
            <div class="input-field col s10 m4 l4 offset-s1 offset-m4 offset-l4">
                <input type="text" name="txtExponent" id="txtExponent">
                <label for="txtExponent">Exponente [b]</label>
            </div>
            <div class="input-field col s10 m4 l4 offset-s1 offset-m4 offset-l4">
                <center>
                    <button class="btn btnCalculate waves-effect waves-light deep-purple darken-1">Calcular</button>
                </center>
            </div>
        </form>

        <div id="resultCont" class="col s12"></div>
    </div>
    
</body>
</html>