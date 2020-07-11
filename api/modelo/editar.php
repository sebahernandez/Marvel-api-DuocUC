<?php
require_once("modelo.class.php");
$editar = $_POST['editar'];

$modelo = new ModeloBD();

$editar_fila = $modelo->actualizarSegunId($editar['tabla'], $editar['columnas'], $editar['valores'], $editar['indice'], $editar['valor_indice']);

if ($editar_fila == 1)
    echo $editar_fila;
else 
    print_r($editar_fila);
?>