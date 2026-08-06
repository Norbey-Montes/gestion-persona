<?php
require_once "persona.php";

class Estudiante extends Persona
{
    // 1. Declaramos los atributos como protected
    protected $programa;
    protected $semestre;

    // 2. Actualizamos el constructor para recibir también el semestre
    public function __construct($nombre, $apellido, $edad, $correo, $programa, $semestre)
    {
        // Llamamos al constructor de la clase padre (Persona)
        parent::__construct($nombre, $apellido, $edad, $correo);
        
        // Inicializamos los atributos propios del estudiante
        $this->programa = $programa;
        $this->semestre = $semestre;
    }

    // 3. Métodos get y set para el programa
    public function getPrograma()
    {
        return $this->programa;
    }

    public function setPrograma($programa)
    {
        $this->programa = trim($programa);
    }

    // 4. Métodos get y set para el semestre
    public function getSemestre()
    {
        return $this->semestre;
    }

    public function setSemestre($semestre)
    {
        $this->semestre = trim($semestre);
    }

    // 5. Polimorfismo en el método saludar
    public function saludar()
    {
        // Pasamos "Soy un estudiante" arriba y quitamos el texto sobrante de abajo
        return "Soy un estudiante<br>" . 
               parent::saludar() . 
               "Mi Programa es: " . $this->programa . "<br>" .
               "Mi Semestre es: " . $this->semestre . "<br>";
    }
}
?>