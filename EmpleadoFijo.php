<?php

require_once "Empleado.php";

class EmpleadoFijo extends Empleado
{
    public function calcularSueldo()
    {
        return 50000;
    }
}
