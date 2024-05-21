<?php
function f($a) {
    return 4 * pow($a, 3) + g(2 * $a, -3 * $a);
}
function g($b, $c) {
    return (7 * $b - 3) % (pow($c, 2) + 1);
}

function h($x, $y, $z) {
    return f($x / $y) + 3 * g($z / $y, $x);
}

$x = isset($_POST['x']) ? intval($_POST['x']) : 0;
$y = isset($_POST['y']) ? intval($_POST['y']) : 0;
$z = isset($_POST['z']) ? intval($_POST['z']) : 0;

$resultado = h($x, $y, $z);

echo "El resultado de h($x, $y, $z) es: $resultado";
?>

