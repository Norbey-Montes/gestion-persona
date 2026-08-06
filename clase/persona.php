<?php
class Persona
{
    // Propiedades cambiadas de private a protected
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $correo;

    public function __construct($nombre, $apellido, $edad, $correo)
    {
        // Usamos los métodos set dentro del constructor para asegurar la validación inicial
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setEdad($edad);
        $this->setCorreo($correo);
    }

    // --- MÉTODOS SET (Asignación y validación) ---

    public function setNombre($nombre) {
        $this->nombre = trim($nombre);
    }

    public function setApellido($apellido) {
        $this->apellido = trim($apellido);
    }

    public function setEdad($edad) {
        // Validación básica de ejemplo para la edad
        if (is_numeric($edad) && $edad > 0 && $edad < 120) {
            $this->edad = $edad;
        } else {
            $this->edad = 0; // Valor por defecto en caso de error
        }
    }

    public function setCorreo($correo) {
        $this->correo = trim($correo);
    }

    // --- MÉTODOS GET (Lectura de propiedades) ---

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getCorreo() {
        return $this->correo;
    }

    // --- MÉTODO SALUDAR ---

    public function saludar()
    {
        return "Hola, Mi nombre es: " . $this->getNombre() . " " . $this->getApellido() . "<br>" .
               "Mi Edad es: " . $this->getEdad() . "<br>" .
               "Mi Correo es: " . $this->getCorreo() . "<br>";
    }
}
?>