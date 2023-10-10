<?php

namespace PreservarElObjetoEntero\Despues;

use PreservarElObjetoEntero\Rango;

class Plan {
	function __construct(private int $dia) {}

	function dentroDeRango(Rango $rango): bool {
		return (
			$this->dia >= $rango->obtenerBajo()
			&& $this->dia <= $rango->obtenerAlto()
		);
	}
}
