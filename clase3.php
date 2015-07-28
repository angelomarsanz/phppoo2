<?php
include "ClaseSencilla.php";
include "Foo.php";

$instancia = new ClaseSencilla();

// Esto también se puede hacer con una variable:

$nombreClase = 'Foo';
$instancia = new $nombreClase(); // Foo()
?>
