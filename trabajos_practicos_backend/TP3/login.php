<?php
$usuario = $_POST ["user"];
$contrasenia = $_POST ["pass"];

$ckuser = "admin";
$ckpass = "1234";

if ($usuario == $ckuser && $contrasenia == $ckpass) {
    header("location:https://github.com/LucasAlejandroDiaz/DiazAlejandroLucas_potrero");
}
else {
    header("location:http://localhost/curso_backend_potrero/trabajos_practicos_backend/TP3/error/error.html");
}
?>