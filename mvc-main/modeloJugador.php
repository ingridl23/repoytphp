<?php

class modeloJugador
{
    private $db;

    public function __construct()
    {
        $this->db=new PDO('mysql:host=localhost;dbname=deporte;charset=utf8', 'root', '');
    }
    public function leerUltimoJugador()
    {
        
        $consulta = 'SELECT * FROM jugador ORDER BY id DESC LIMIT 1';
        $query = $this->db->prepare($consulta);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function insertar($nombre, $edad){
        $consulta = 'INSERT INTO jugador (nombre, edad,club) VALUES (?,?,?)';
        $query = $this->db->prepare($consulta);
        $query->execute([$nombre,$edad,1]);
    }
}
