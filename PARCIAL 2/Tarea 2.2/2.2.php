<?php
function f($x) {
    if ($x <= 0.0) {
        return pow($x, 2) - $x;
    } else {
        return -1 * pow($x, 2) + 3 * $x;
    }
}
$x = 2;
$resultado = f($x);
echo "El resultado de f($x) es: $resultado";
?>
