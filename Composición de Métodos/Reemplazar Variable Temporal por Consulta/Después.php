<?php

namespace ReemplazarVariableTemporalPorConsulta\Despues;

class ProductoEnCarrito {
	function __construct(private int $cantidad, private float $precio) {}

	function calcularTotal(): float {
		if ($this->precioBase() > 1000) {
			return $this->precioBase() * 0.95;
		} else {
			return $this->precioBase() * 0.98;
		}
	}

	private function precioBase(): float {
		return $this->cantidad * $this->precio;
	}
}

$producto = new ProductoEnCarrito(rand(1, 10), rand(10, 100));
echo "El precio total es: {$producto->calcularTotal()}";
