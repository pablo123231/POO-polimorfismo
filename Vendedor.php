<?php

require_once "Empleado.php";

class Vendedor extends Empleado
{
    public $sueldoBase;
    public $ventas;
    public $comision;

    public function __construct($sueldoBase, $ventas, $comision)
    {
        $this->sueldoBase = $sueldoBase;
        $this->ventas = $ventas;
        $this->comision = $comision;
    }

    public function calcularSueldo()
    {
        return $this->sueldoBase + ($this->ventas * $this->comision);
    }
}
