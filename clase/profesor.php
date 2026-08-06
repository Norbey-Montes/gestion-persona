<?php
require_once "persona.php";

class Profesor extends Persona
{
    protected $asignatura;
    protected $experiencia;
    protected $titulo;

    public function __construct($nombre, $apellido, $edad, $correo, $asignatura, $experiencia, $titulo)
    {
        parent::__construct($nombre, $apellido, $edad, $correo);
        $this->asignatura = $asignatura;
        $this->experiencia = $experiencia;
        $this->titulo = $titulo;
    }

    public function getAsignatura() {
        return $this->asignatura;
    }
    public function setAsignatura($asignatura) {
        $this->asignatura = trim($asignatura);
    }

    public function getExperiencia() {
        return $this->experiencia;
    }
    public function setExperiencia($experiencia) {
        $this->experiencia = trim($experiencia);
    }

    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = trim($titulo);
    }

    // Método saludar corregido: ponemos el texto del rol arriba y eliminamos el sobrante de abajo
    public function saludar()
    {
        return "Soy un profesor<br>" . 
               parent::saludar() . 
               "Asignatura: " . $this->asignatura . "<br>" .
               "Experiencia: " . $this->experiencia . "<br>" .
               "Título: " . $this->titulo . "<br>";
    }
}
?>