<html>
    <body>
        <h1>5630. Colegiatura</h1>
        <h2>Descripción</h2>
        <p>La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca, pero le preocupa cuanto vaya a pagar, y te pide ayuda para que hagas un programa que le diga cuanto tenga que pagar. El esquema que maneja la prepa es este:</p>
        <p>Plan de pagos:</p>
        <p>La colegiatura de los alumnos se determina según el numero de materias que cursan. El costo de cada una de las materias es de $1600.</p>
        <p>Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo siguiente: si el promedio obtenido por un alumno en el ultimo periodo es mayor o igual que 9, se le hará un descuento del 30% sobre la colegiatura y no se le cobrara IVA; si el promedio obtenido es menor que 9 deberá pagar la colegiatura completa, mas el IVA del 16%.</p>
        <h2>Entrada</h2>
        <p>El numero de materias A que Esteban va a cursar. Y un numero con decimales B que es el promedio de Esteban.</p>
        <h2>Salida</h2>
        <p>Un numero entero C con el precio a pagar. Debe de ir con un $.</p>
        <?php
            $c;
            $d=0;
            $x;
            $a=5;
            $b=9.6;

            $c= $a * 1600;
            if($b>=9)
              {
                $x= $c * 30 / 100;
                 $d= $c - $x;
              }
          else if($b<9)
            {
             $x= $c * 16 / 100;
             $d= $c + $x;
            }
            echo "Variable a: ",$a;
            echo "<br>";
            echo "Variable b: ",$b;
            echo "<br>";
            echo "Resulado: ","$",$d;
        ?>
    </body>