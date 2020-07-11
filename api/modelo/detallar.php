<?php
require_once("modelo.class.php");
$modelo = new ModeloBD();

$detallar_fila = $modelo->seleccionarUnaFilaSegunId($_GET['tabla'], $_GET['indice'], $_GET['valor_indice']);

if ($detallar_fila == 1)
    echo $detallar_fila;
else 
    print_r($detallar_fila);
?>