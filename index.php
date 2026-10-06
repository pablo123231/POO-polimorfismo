<?php

require_once "Empleado.php";
require_once "EmpleadoFijo.php";
require_once "EmpleadoPorHora.php";
require_once "Vendedor.php";

$empleados = [
    new EmpleadoFijo(),
    new EmpleadoPorHora(40, 500),
    new EmpleadoPorHora(30, 500),
    new Vendedor(30000, 100000, 0.10),
    new Vendedor(30000, 50000, 0.10)
];

foreach ($empleados as $empleado) {
    echo get_class($empleado) . ": $" . $empleado->calcularSueldo() . "<br>";
}
