<?php
require("../modelo/bbdd.php");

$baseDatos = new Bbdd();  
var_dump($baseDatos);

$baseDatos->seleccionClientes(); 

?>