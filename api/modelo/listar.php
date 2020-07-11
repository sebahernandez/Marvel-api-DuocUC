<?php

require_once("modelo.class.php");

$modelo = new ModeloBD();

$listado = $modelo->listarTodo($_GET['tabla']); //nombre tabla

if ($listado == 1)
    echo $listado;
else 
    print_r($listado);

?>