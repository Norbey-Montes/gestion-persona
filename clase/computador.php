
<?php
class Computador
{
    public $marca;
    public $modelo;
    public $procesador;

    public function __construct($marca, $modelo, $procesador)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->procesador = $procesador;
    }

    public function mostrarInfo()
    {
        return "Computador: " . $this->marca . "<br>" ."Modelo:". $this->modelo . "<br>" . "Procesador: " . $this->procesador . "<br>";
    }
}

?>