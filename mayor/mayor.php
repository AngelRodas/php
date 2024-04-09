<?php
$n1 = $_POST['numero1'];
$n2 = $_POST['numero2'];
$n3 = $_POST['numero3'];

if ($n1 > $n2 && $n1 > $n3) {
    echo "$n1 es el número mayor de los tres.";
} elseif ($n2 > $n1 && $n2 > $n3) {
    echo "$n2 es el número mayor de los tres.";
} elseif ($n3 > $n1 && $n3 > $n2) {
    echo "$n3 es el número mayor de los tres.";
} else {
    echo "Los números son iguales o hay números triplicados.";
}


?>