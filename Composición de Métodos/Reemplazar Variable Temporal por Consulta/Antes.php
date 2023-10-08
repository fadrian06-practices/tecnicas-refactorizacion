<?php

namespace ReemplazarVariableTemporalPorConsulta\Antes;

class ProductoEnCarrito {
	function __construct(private int $cantidad, private float $precio) {}

	function calcularTotal(): float {
		$precioBase = $this->cantidad * $this->precio;

		if ($precioBase > 1000) {
			return $precioBase * 0.95;
		} else {
			return $precioBase * 0.98;
		}
	}
}

$producto = new ProductoEnCarrito(rand(1, 10), rand(10, 100));
echo "El precio total es: {$producto->calcularTotal()}";
