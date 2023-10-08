<?php

namespace DividirVariableTemporal\Antes;

class Rectangulo {
	function __construct(private int $ancho, private int $alto) {}

	function imprimirPerimetroYArea(): void {
		$temporal = 2 * ($this->alto + $this->ancho);
		echo "Perímetro: $temporal\n";
		$temporal = $this->alto * $this->ancho;
		echo "     Área: $temporal\n";
	}
}

$rectangulo = new Rectangulo(rand(1, 10), rand(1, 10));
$rectangulo->imprimirPerimetroYArea();
