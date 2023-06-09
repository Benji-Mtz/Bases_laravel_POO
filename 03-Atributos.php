<?php
include 'includes/header.php';

class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
}

$empleado = new Empleado;

var_dump($empleado->nombre);

$empleado->nombre = "Benji";

var_dump($empleado->nombre);

echo "<pre>";
    var_dump($empleado);
echo "</pre>";