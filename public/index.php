<?php
include '../clase/persona.php';

// Pasamos los datos directamente en el paréntesis
$persona1 = new Persona("Norbey", "Montes", "23", "norbey@correo.com");

$persona2 = new Persona("Valentina", "Ramírez", "19", "valentina@correo.com");

// Imprimir
echo $persona1->saludar();
echo "<br>"; 

echo $persona2->saludar();
?>