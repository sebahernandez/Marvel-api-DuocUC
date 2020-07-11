<?php
require_once("modelo.class.php");
$eliminar = $_POST['eliminar'];

$modelo = new ModeloBD();

$eliminar_fila = $modelo->borrarUnaFilaSegunId($eliminar['tabla'], $eliminar['indice'], $eliminar['valor_indice']);

if ($eliminar_fila == 1)
    echo $eliminar_fila;
else 
    print_r($eliminar_fila);
?>