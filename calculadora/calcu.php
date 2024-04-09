<?php
    $dato_a = $_POST['numero1'];
    $dato_b = $_POST['numero2'];
    $op = $_POST['from'];

    switch ($op) {
        case 'mu':
            $r = $dato_a * $dato_b;
            echo "La multiplicacion de $dato_a y $dato_b es: $r";
            break;
        case 'di':
            $r = $dato_a / $dato_b;
            echo "La division de $dato_a y $dato_b es: $r";
            break;
        case 'su':
            $r = $dato_a + $dato_b;
            echo "La suma de $dato_a y $dato_b es: $r";
            break;
         case 're':
            $r = $dato_a - $dato_b;
            echo "La resta de $dato_a y $dato_b es: $r";
                break;
        default:
            echo "No se ha seleccionado una operacion válida.";
    }

?>
