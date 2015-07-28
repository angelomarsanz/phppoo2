<?php
include "ClaseSencilla.php";

$instancia = new ClaseSencilla();

$asignada   =  $instancia;
$referencia =& $instancia;

$instancia->var = '$asignada tendrá pepito';

$instancia = null; // $instancia y $referencia son null

var_dump($instancia);
var_dump($referencia);
var_dump($asignada);
?>