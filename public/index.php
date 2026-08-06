<?php
require_once '../clase/persona.php';
require_once '../clase/computador.php';
require_once '../clase/estudiante.php';
require_once '../clase/profesor.php'; // 1. Requerimos la nueva clase

// Objetos existentes
$persona1 = new Persona("Norbey", "Montes", "23", "norbey@correo.com");
$persona2 = new Persona("Valentina", "Ramírez", "19", "valentina@correo.com");
$estudiante1 = new Estudiante("Carlos", "Gómez", "20", "carlos@correo.com", "ADSO", "Semestre 3");

// 2. Creamos un objeto de la clase Profesor (4 datos de persona + 3 propios)
$profesor1 = new Profesor("Ana", "Pérez", "35", "ana.perez@correo.com", "Programación Web", "5 años", "Ingeniera de Sistemas");

// Imprimir personas y estudiantes
echo $persona1->saludar();
echo "<br>"; 
echo $persona2->saludar();
echo "<br>";

// Computadores
$pc1 = new Computador("Asus", "Vivobook", "Intel Core i5");
$pc2 = new Computador("HP", "Pavilion", "AMD Ryzen 7");

echo $pc1->mostrarInfo();
echo "<br>";
echo $pc2->mostrarInfo();
echo "<br>";

echo $estudiante1->saludar();
echo "<br>";

// 3. Imprimimos el saludo del profesor
echo $profesor1->saludar();
?>