<?php
class vistaJugador
{
    public function mostrarUltimoJugador($jugador)
    {
        echo ($jugador->nombre);
        echo ($jugador->edad);
        echo ($jugador->club);
        echo "<br>";
    }
}
