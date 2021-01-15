<?php
require("modelo/bbdd.php");

$baseDatos = new Bbdd();  
var_dump($baseDatos);

$baseDatos->seleccionClientes();

echo "<div class=\"fila3\"><a href=\"vista/formulario.html\"><input class=\"btn\" type=\"button\" value=\"Insertar Cliente\"></a></div>"

?>