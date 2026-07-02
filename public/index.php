<?php
// 1. Incluimos el archivo donde vive la clase
include 'clase/persona.php';

// 2. Creamos una instancia (objeto) de la clase Persona
$persona1 = new Persona();

// 3. Asignamos los valores a los atributos
$persona1->nombre = "Norbey";
$persona1->edad = 20;
$persona1->correo = "ejemplo@correo.com";

// 4. Imprimimos el resultado usando el método saludar
echo $persona1->saludar();
?>