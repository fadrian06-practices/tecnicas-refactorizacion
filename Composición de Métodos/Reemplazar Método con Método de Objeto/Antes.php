<?php

namespace ReemplazarMetodoConMetodoDeObjeto\Antes;

class Pedido {
	function precio(): float {
		$precioBasePrimario = rand(1, 1000);
		$precioBaseSecundario = rand(1, 1000);
		$precioBaseTerciario = rand(1, 1000);

		// Realizar largo cómputo
		return ($precioBasePrimario + $precioBaseSecundario + $precioBaseTerciario) / 3;
	}
}

$pedido = new Pedido;
echo "Precio del pedido: {$pedido->precio()}";
