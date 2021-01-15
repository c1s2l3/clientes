<?php
require("bbdd.php");

$baseDatos = new Bbdd();

$baseDatos->insertarProducto(); //lanzamos la consulta de inserción que hemos escrito en bbdd.php

?>