<?php

namespace PreservarElObjetoEntero;

class Rango {
	function __construct(private int $bajo, private int $alto) {}

	function obtenerBajo(): int {
		return $this->bajo;
	}

	function obtenerAlto(): int {
		return $this->alto;
	}
}
