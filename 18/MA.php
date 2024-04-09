<?php
$edad=$_POST['edad'];
if($edad >= 18){
    echo "Bienvenido a nuestra pagina";
}elseif($edad<18){
    echo "No es mayor de edad no puede ingresar";
}
?>