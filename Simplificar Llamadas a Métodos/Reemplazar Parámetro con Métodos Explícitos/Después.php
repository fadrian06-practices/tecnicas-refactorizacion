<?php

namespace ReemplazarParametroConMetodosExplicitos\Despues;

class Rectangulo {
	function __construct(private int $alto, private int $ancho) {}

	function asignarAlto(int $alto) {
		$this->alto = $alto;
	}

	function asignarAncho(int $ancho) {
		$this->ancho = $ancho;
	}
}

$rectangulo = new Rectangulo(rand(1, 10), rand(1, 10));
$rectangulo->asignarAlto(5);
echo 'Valor cambiado';
