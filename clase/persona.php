<?php
class Persona
{
    public $nombre;
    public $apellido;
    public $edad;
    public $correo;

    public function saludar()
    {
        return "Hola, Mi nombre es: " . $this->nombre . " " . $this->apellido . "<br>" ."Mi Edad es: " . $this->edad . "<br>" ."Mi Correo es: " . $this->correo . "<br>";
    }
}
?>