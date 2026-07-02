<?php
class Persona
{
    public $nombre;
    public $apellido;
    public $edad;
    public $correo;

    // Fíjate en los dos guiones bajos: __construct
    public function __construct($nombre, $apellido, $edad, $correo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->correo = $correo;
    }

    public function saludar()
    {
        return "Hola, Mi nombre es: " . $this->nombre . " " . $this->apellido . "<br>" ."Mi Edad es: " . $this->edad . "<br>" ."Mi Correo es: " . $this->correo . "<br>";
    }
}
?>