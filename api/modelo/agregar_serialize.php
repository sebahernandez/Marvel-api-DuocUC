<?php
require_once("modelo.class.php");
parse_str($_POST['agregar'], $agregar);

$tabla = $agregar['agregar'];
unset($agregar['agregar']);

$columnas = array_keys($agregar);
$valores = array_values($agregar);

$modelo = new ModeloBD();

$agregar_fila = $modelo->agregarFila($tabla, $columnas, $valores);

if ($agregar_fila == 1)
    echo $agregar_fila;
else 
    print_r($agregar_fila);

?>