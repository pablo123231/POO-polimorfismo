<?php

require_once "Empleado.php";

class EmpleadoPorHora extends Empleado
{
    public $horasTrabajadas;
    public $valorHora;

    public function __construct($horasTrabajadas, $valorHora)
    {
        $this->horasTrabajadas = $horasTrabajadas;
        $this->valorHora = $valorHora;
    }

    public function calcularSueldo()
    {
        return $this->horasTrabajadas * $this->valorHora;
    }
}
