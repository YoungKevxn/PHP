<html>
    <body>
    <h1>Estaciones del Año</h1>
    <h2>Descripcion</h2>
    <p>Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día d y un mes m según lo siguiente:</p>

    <p>Winter del 21 de diciembre al 20 de marzo <br>
        Spring del 21 de marzo al 21 de junio <br>
        Summer del 22 de junio al 22 de septiembre <br>
        Fall del 23 de septiembre al 20 de diciembre</p>
    <p>Considerando la siguiente cantidad de días para cada mes:</p>
    <p>Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días<br>
    Abril, Junio, Septiembre y Noviembre 30 días<br>
    Febrero 28 días<br>
    Cualquier fecha fuera de estos rangos debe considerarse como no existente</p>
    <h2>Entrada</h2>
    <p>Dos números enteros d y m separados por un espacio que corresponden al día y mes de una fecha determinada</p>
    <h2>Salida</h2>
    <p>Una cadena S que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, si la fecha no es válida</p>
    <h2>Ejemplo</h2>
    <?php
    $d=15;
    $m=10;
    if($d==21 and $m==12)
    {
        echo "Winter";
    }
    else if($d==22 and $m==3)
    {
        echo "Spring";
    }
    else if($d==21 and $m==6)
    {
        echo "Summer";
    }
    else if($d==15 and $m==10)
    {
        echo "Fall";
    }
    else if($d==31 and $m==4)
    {
        echo "no existe la fecha";
    }
    ?>

    <br>
    <br>
    <br>

    <h1>El mayor de tres números</h1>
    <h2>Descripcion</h2>
    <p>Realiza un problema que imprima el mayor de tres números.</p>
    <h2>Entrada</h2>
    <p>Escribe tres números enteros a,b y c</p>
    <h2>Salida</h2>
    <p>El número entero mayor de los tres números introducidos</p>
    <h2>Ejemplo</h2>
    <?php
    $a=60;
    $b=9;
    $c=-7;
    echo "El mayor es: ", max($a,$b,$c);
    ?>

    <br>
    <br>
    <br>

    <h1>¿Cuántos valen 7?</h1>
    <h2>Descripcion</h2>
    <p>Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7</p>
    <h2>Entrada</h2>
    <p>Dos enteros en el rango de -1000 a +1000</p>
    <h2>Salida</h2>
    <p>La cantidad de enteros iguales a 7</p>
    <h2>Ejemplo</h2>
    <?php
    $x=7;
    $y=57;
    $cont=0;
    if($x==7)
    {
        $cont=$cont+1;
    }
    else if($y==7)
    {
        $cont=$cont+1;
    }
    //return $cont;
    echo $cont;
    ?>
    </body>
</html>