<?php

namespace ReemplazarArregloConObjeto\Despues;

use ReemplazarArregloConObjeto\Rendimiento;

require 'Rendimiento.php';

$rendimiento = new Rendimiento;
$rendimiento->asignarNombre('Liverpool');
$rendimiento->asignarVictorias(15);

printf(
	"El equipo %s tiene %d victorias\n",
	$rendimiento->nombre(),
	$rendimiento->victorias()
);
