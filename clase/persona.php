<?php
class Persona
{
    public $nombre;
    public $edad;
    public $correo;

    public function saludar()
    {
        return "Hola, mi nombre es: " . $this->nombre;
    }
}
?>