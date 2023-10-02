<?php

namespace MetodoEnLinea\Antes;

class EntregaDePizza {
	function __construct(private int $numeroEntregasRetrasadas) {}

	function obtenerPuntuacion(): int {
		return $this->masDeCincoEntregasRetrasadas() ? 2 : 1;
	}

	private function masDeCincoEntregasRetrasadas(): bool {
		return $this->numeroEntregasRetrasadas > 5;
	}
}

$entrega = new EntregaDePizza(rand(0, 10));
echo "Puntuacion: {$entrega->obtenerPuntuacion()}★";
