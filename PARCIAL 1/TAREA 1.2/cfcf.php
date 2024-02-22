<html>
    <body>
        <h1>5630. Colegiatura</h1>
        <h2>Descripción</h2>
        <p>Dado un valor real a, quieres resolver una serie de ecuaciones hasta obtener el valor de z</p>
        <h2>Entrada</h2>
        <p>Un real a. Puedes suponer que 1 < a < 100</p>
        <h2>Salida</h2>
        <p>Un real que sea el valor de z impreso con tres puntos decimales</p>
        <?php
            $a=33.562;
            $x=3*$a+15;
            $y=($x+3)/($x+1);
            $z=((5*$x)+(7*$y))/($a*$x*$y);
            echo $z;
        ?>
    </body>