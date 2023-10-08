<?php

namespace PropiedadAutoEncapsulada\Antes;

class Rango {
	function __construct(private int $bajo, private int $alto) {}

	function incluye(int $arg): bool {
		return $arg >= $this->bajo && $arg <= $this->alto;
	}
}

$rango = new Rango(1, 10);
echo '5 pertenece al rango? ' . ($rango->incluye(5) ? 'Si' : 'No');
