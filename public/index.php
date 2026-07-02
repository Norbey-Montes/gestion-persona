<?php
include '../clase/persona.php';

// --- Persona 1 ---
$persona1 = new Persona();
$persona1->nombre = "Norbey";
$persona1->apellido = "Montes";
$persona1->edad = "20";
$persona1->correo = "norbey@correo.com";

// --- Persona 2 ---
$persona2 = new Persona();
$persona2->nombre = "Valentina";
$persona2->apellido = "Ramírez";
$persona2->edad = "19";
$persona2->correo = "valentina@correo.com";

// Imprimir (el formato viene desde la clase)
echo $persona1->saludar();
echo "<br>"; // Un pequeño espacio entre personas

echo $persona2->saludar();
?>