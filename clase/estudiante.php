<?php
require_once "persona.php";

class Estudiante extends Persona
{
    public function saludar()
    {
        // Usamos los métodos get() en lugar de las variables directas
        return "Hola, Mi nombre es: " . $this->getNombre() . " " . $this->getApellido() . "<br>" .
               "Mi Edad es: " . $this->getEdad() . "<br>" .
               "Mi Correo es: " . $this->getCorreo() . "<br><br>" . 
               "Soy un estudiante";
    }
}
?>