<?php
require("bbdd.php");

$baseDatos = new Bbdd();  //la variable $baseDatos es una copia de la clase Bbdd definida en bbdd.php

$baseDatos->seleccionArticulos(); //llamamos a la función seleccionArticulos

?>