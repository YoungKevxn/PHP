<?php
$b=array();
$t=rand(1,1000);
for($x=1;$x<=$t;$x++){array_push($b,rand(1,10));}
echo "Datos generados: ",$t,"<br>";
$f=0;
for($x=0;$x<$t;$x++){

if(($x+1)%10==0)
$f=$f+$b[$x];
}
$avg=$f/$t;
echo "<br>Promedio: ",$avg;
$gtavg=0;
$pass=0;
$fail=0;
for($x=0;$x<$t;$x++){
if($b[$x]>$avg){$gtavg++;}
if($b[$x]>6){$pass++;}
else{$fail++;}
}
echo "<br>Alumnos mayores: ",$gtavg;
echo "<br>Reprobados: ",$fail,"<br>";
$ratio=($fail/$t)*100;
echo "Porcentaje de reprobados: ",$ratio,"<br>";
echo "Aprobados: ",$pass,"<br>";
$rat=($pass/$t)*100;
echo "Porcentaje de aprobados: ",$rat,"<br>";

$sd=0;
for($x=0;$x<$t;$x++){$sd=$sd+(($b[$x]-$avg)*($b[$x]-$avg));}
$stdDev=sqrt($sd/$t);
echo "Desviacion: ",$stdDev;

$c=0;
echo "<table border='1'>";
while($c<=$t-29){
echo"<tr>";
for($d=0;$d<=29;$d++){
echo "<td>",$b[$c],"</td>";
$c++;}
echo"</tr>";
}
echo "</table>";
?>
