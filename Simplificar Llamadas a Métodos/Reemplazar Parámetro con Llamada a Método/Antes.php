<?php

namespace ReemplazarParametroConLlamadaAMetodo\Antes;

use ReemplazarParametroConLlamadaAMetodo\MetodosProductoEnCarrito;

require 'MetodosProductoEnCarrito.php';

class ProductoEnCarrito {
	use MetodosProductoEnCarrito;

	function obtenerPrecioTotal(): float {
		$precioBase = $this->cantidad * $this->precio;
		$descuentoDeTemporada = $this->obtenerDescuentoDeTemporada();
		$matricula = $this->obtenerMatricula();
		$precioFinal = $this->precioDescontado(
			$precioBase,
			$descuentoDeTemporada,
			$matricula
		);

		return $precioFinal;
	}

	private function precioDescontado(
		float $precioBase,
		float $descuentoDeTemporada,
		object $matricula
	): float {
		if (@$matricula->id) {
			return $precioBase + $descuentoDeTemporada;
		}

		return 0;
	}
}

$productoEnCarrito = new ProductoEnCarrito;
echo "Precio total: {$productoEnCarrito->obtenerPrecioTotal()}";
