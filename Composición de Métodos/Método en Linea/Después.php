<?php

namespace MetodoEnLinea\Despues;

class EntregaDePizza {
	function __construct(private int $numeroEntregasRetrasadas) {}

	function obtenerPuntuacion(): int {
		return $this->numeroEntregasRetrasadas > 5 ? 2 : 1;
	}
}

$entrega = new EntregaDePizza(rand(0, 10));
echo "Puntuacion: {$entrega->obtenerPuntuacion()}★";
