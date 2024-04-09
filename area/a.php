<?php
    $dato_a = $_POST['numero1'];
    $dato_b = $_POST['numero2'];
    $figura = $_POST['from'];

    switch ($figura) {
        case 'cir':
            $radio = $dato_a ;
            $area = M_PI * pow($radio, 2);
            $perimetro = 2 * M_PI * $radio;
            echo "Área del círculo: $area <br>";
            echo "Perímetro del círculo: $perimetro";
            break;
        case 'cua':
            $area = $dato_a * $dato_a;
            $perimetro = 4 * $dato_a;
            echo "Área del cuadrado: $area <br>";
            echo "Perímetro del cuadrado: $perimetro";
            break;
        case 'rec':
            $area = $dato_a * $dato_b;
            $perimetro = 2 * ($dato_a + $dato_b);
            echo "Área del rectángulo: $area <br>";
            echo "Perímetro del rectángulo: $perimetro";
            break;
        default:
            echo "No se ha seleccionado una figura válida.";
    }

?>
