<?php
require_once '../clase/persona.php';
require_once '../clase/computador.php';
require_once '../clase/estudiante.php';

// Pasamos los datos directamente en el paréntesis
$persona1 = new Persona("Norbey", "Montes", "23", "norbey@correo.com");

$persona2 = new Persona("Valentina", "Ramírez", "19", "valentina@correo.com");

$estudiante1 = new Estudiante("Carlos", "Gómez", "20", "carlos@correo.com");

// Imprimir
echo $persona1->saludar();
echo "<br>"; 

echo $persona2->saludar();
echo "<br>";




// Creamos 2 objetos de la clase Computador
$pc1 = new Computador("Asus", "Vivobook", "Intel Core i5");
$pc2 = new Computador("HP", "Pavilion", "AMD Ryzen 7");

// Ejecutamos los métodos
echo $pc1->mostrarInfo();
echo "<br>";

echo $pc2->mostrarInfo();
echo "<br>";

echo $estudiante1->saludar();
?>