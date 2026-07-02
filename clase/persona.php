<?php

class Persona {
    // Propiedad de la clase
    public $nombre;

    // Método constructor para asignar el nombre al crear el objeto
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Método para mostrar el saludo
    public function saludar() {
        echo "Hola, mi nombre es " . $this->nombre . ".";
    }
}

// Crear una nueva instancia (objeto) de la clase Persona
$persona = new Persona("Norbey");

// Llamar al método saludar
$persona->saludar();

?>
