<?php

$nombreC = $_POST['nombreC'];
$descPersonal = $_POST['descPersonal'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$sexo = $_POST['sexo'];
$meal = $_POST['meal'];

echo "<h3>Nombre Completo: </h3>".$nombreC;
echo "<h3>Descripción Personal: </h3>".$descPersonal;
echo "<h3>Usuario: </h3>".$usuario;
echo "<h3>Contraseña: </h3>".$contrasena;
echo "<h3>Sexo: </h3>".$sexo;
echo "<h3>Comida Favorita: </h3>".$meal;

?>