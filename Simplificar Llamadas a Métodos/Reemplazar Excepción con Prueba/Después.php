<?php

namespace ReemplazarExcepcionConPrueba\Despues;

class Notas {
	/** @param array<int, float> $valores */
	function __construct(private array $valores) {}

	function obtenerValorParaPeriodo(int $numeroDePeriodo): float {
		if (!isset($this->valores[$numeroDePeriodo])) {
			return 0;
		}

		return $this->valores[$numeroDePeriodo];
	}
}

$notas = new Notas([2019 => 43, 2023 => 65]);
echo "Nota del periodo 2023: {$notas->obtenerValorParaPeriodo(2023)}";
