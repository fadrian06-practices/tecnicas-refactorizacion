<?php

namespace ReemplazarExcepcionConPrueba\Antes;

use Exception;

class ExcepcionArregloFueraDeRango extends Exception {}

class Notas {
	/** @param array<int, float> $valores */
	function __construct(private array $valores) {}

	function obtenerValorParaPeriodo(int $numeroDePeriodo): float {
	  try {
	  	if (!@$this->valores[$numeroDePeriodo]) {
	  		throw new ExcepcionArregloFueraDeRango;
	  	}

	    return $this->valores[$numeroDePeriodo];
	  } catch (ExcepcionArregloFueraDeRango) {
	    return 0;
	  }
	}
}

$notas = new Notas([2019 => 43, 2023 => 65]);
echo "Nota del periodo 2023: {$notas->obtenerValorParaPeriodo(2023)}";
