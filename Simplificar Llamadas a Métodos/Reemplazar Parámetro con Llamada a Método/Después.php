<?php

namespace ReemplazarParametroConLlamadaAMetodo\Despues;

use ReemplazarParametroConLlamadaAMetodo\MetodosProductoEnCarrito;

require 'MetodosProductoEnCarrito.php';

class ProductoEnCarrito {
	use MetodosProductoEnCarrito;

	function obtenerPrecioTotal(): float {
		$precioBase = $this->cantidad * $this->precio;
		$precioFinal = $this->precioDescontado($precioBase);
		return $precioFinal;
	}

	private function precioDescontado(float $precioBase): float {
		if ($this->obtenerMatricula()->id) {
			return $precioBase + $this->obtenerDescuentoDeTemporada();
		}

		return 0;
	}
}

$productoEnCarrito = new ProductoEnCarrito;
echo "Precio total: {$productoEnCarrito->obtenerPrecioTotal()}";
