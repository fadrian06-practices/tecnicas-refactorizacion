<?php

namespace PreservarElObjetoEntero\Antes;

class Plan {
	function __construct(private int $dia) {}

	function dentroDeRango(int $bajo, int $alto): bool {
		return $this->dia >= $bajo && $this->dia <= $alto;
	}
}
