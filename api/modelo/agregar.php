<?php
require_once("modelo.class.php");
$agregar = $_POST['agregar'];

$modelo = new ModeloBD();

$agregar_fila = $modelo->agregarFila($agregar['tabla'], $agregar['columnas'], $agregar['valores']);

if ($agregar_fila == 1)
    echo $agregar_fila;
else 
    print_r($agregar_fila);
?>