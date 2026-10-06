# Polimorfismo con empleados

Esta tarea muestra cómo distintas clases de empleados calculan su sueldo de forma diferente.

- `Empleado.php`: clase base con `calcularSueldo()`.
- `EmpleadoFijo.php`: empleado con sueldo fijo.
- `EmpleadoPorHora.php`: empleado que cobra por hora.
- `Vendedor.php`: vendedor con sueldo base y comisión.
- `index.php`: crea los empleados y muestra sus sueldos.

Para ejecutarlo, usar `php index.php` en la terminal o abrir `index.php` desde XAMPP.

El polimorfismo está en el `foreach` de `index.php`. Allí se llama a `calcularSueldo()` sobre objetos distintos tratados como `Empleado`, y cada uno ejecuta su propia versión del método.
