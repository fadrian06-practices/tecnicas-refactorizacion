<?php

namespace ReemplazarMetodoConMetodoDeObjeto\Despues;

use ReemplazarMetodoConMetodoDeObjeto\MetodosPedido;

require 'MetodosPedido.php';

class Pedido {
	use MetodosPedido;

	function precio(): float {
		return (new CalculadorDePrecio($this))->computar();
	}
}

class CalculadorDePrecio {
	private float $precioBasePrimario;
	private float $precioBaseSecundario;
	private float $precioBaseTerciario;

	function __construct(Pedido $pedido) {
		// Copiar información relevante del objeto pedido
		$this->precioBasePrimario = $pedido->precioBasePrimario;
		$this->precioBaseSecundario = $pedido->precioBaseSecundario;
		$this->precioBaseTerciario = $pedido->precioBaseTerciario;
	}

	function computar(): float {
		// Realizar largo cómputo
		return (
			$this->precioBasePrimario
			+ $this->precioBaseSecundario
			+ $this->precioBaseTerciario
		) / 3;
	}
}

$pedido = new Pedido;
echo "Precio del pedido: {$pedido->precio()}";
