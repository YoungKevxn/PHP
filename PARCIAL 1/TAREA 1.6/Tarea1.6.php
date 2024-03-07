<html>
    <body>
     <h1 align="center">2765. Sumando dos conjuntos</h1>
     
     <h2>DESCRIPCION</h2>
     <p>
         Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos. 1<=N<=100. <br>
       Por ejemplo,  sea N=4: <br>

         2 3 4 5 <br><br>

         6 7 1 3 <br><br>

         El resultado de sumarlos es: <br><br>

         8 10 5 8 <br><br>

    </p>

    <h2>ENTRADA</h2>
    <p>
    En la primera línea el entero N. En la segunda línea,
     separados por un espacio, los números del primer conjunto. 
     En la tercera línea también separados por un espacio, los números del segundo conjunto.
    </p>

    <h2>SALIDA</h2>
    <p>Los números resultantes de sumar ambos conjuntos, separados por un espacio.</p>

    <h2>EJEMPLO</h2>

    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
            <td><h4>SALIDA</h4></td>
            <td><h4>DESCRIPCION</h4></td>
        </tr>
        <tr >
            <td align="center"><?php 
            $a=array();
            $n=rand(1,100);
            
            for($i=1; $i<=$n; $i++)
            {
                array_push($a, rand(0,1000));
            }
               echo "NUMEROS A SUMAR: " . $n . "<br><br>";
            
                for($i=0; $i<$n; $i++)
                {
                    echo $a[$i] . " ";
                }

                $p=array();
                for($i=1; $i<=$n; $i++)
                {
                    array_push($p, rand(0,1000));
                }
                
                   echo "<br><br> SUMA CON " ."<br><br>";
                
                    for($j=0; $j<$n; $j++)
                    {
                        echo $p[$j] . " ";
                    }
            
            ?></td>
            <td align="center"><?php

               for($h=0; $h<$n; $h++)
               {
                     echo  $p[$h]+$a[$h] . " ";
               }

            ?></td>
            <td align="center"><?php 
            
            for($h=0; $h<$n; $h++)
            {
                  echo  $p[$h]."+".$a[$h] . " ";
            }
            ?></td>
        </tr>
        </tr>
    </table>
    </body>
</html>