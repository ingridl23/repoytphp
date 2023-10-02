<?php
require_once 'modeloJugador.php';
require_once 'vistaJugador.php';
class jugadorControlador{
    private $modelo;
    private $vista;
    public function __construct()
    {
        $this->modelo=new modeloJugador();
        $this->vista=new vistaJugador();
    }
    public function leerUltimoJugador(){
        $jugador=$this->modelo->leerUltimoJugador();
        $this->vista->mostrarUltimoJugador($jugador);
    }
    public function insertar($nombre,$edad){
        $this->modelo->insertar($nombre,$edad);

    }
  
}