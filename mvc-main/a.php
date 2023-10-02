<?php
require_once 'jugadorControlador.php';

$miControlador=new jugadorControlador();

if ($_GET['accion']=='leer') $miControlador->leerUltimoJugador();
if ($_GET['accion']=='insertar') $miControlador->insertar($_GET['nombre'],$_GET['edad']);
?>