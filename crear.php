<?php
require_once __DIR__.'/session.php';
require_once __DIR__.'/funciones.php';


$permiso="crear_cliente";
if(in_array($permiso, $permisosUsuario)){
    $nacionalidades= listadoNacionalidades();

require_once __DIR__.'/view/crear_vista.php';
}else{
    $_SESSION['sin_permiso']="No tiene permiso para esta operación";
    header("Location: list.php");
}


