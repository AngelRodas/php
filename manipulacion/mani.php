<?php
$cadena=$_POST['ca'];
$ca_m= strtoupper($cadena);
$ca_mi= strtolower($cadena);
$ca_sin = str_replace(" ", "", $cadena);
$longitud = strlen($ca_sin);
echo " Longitud de la cadena: $longitud" . "<br>"; 
echo " Letras en minuscula: $ca_mi" . "<br>"; 
echo " LETRAS EN MAYUSCULAS: $ca_m ". "<br>";
?>