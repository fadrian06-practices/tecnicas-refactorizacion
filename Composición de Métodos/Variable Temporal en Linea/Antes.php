<?php

namespace VariableTemporalEnLinea\Antes;

use VariableTemporalEnLinea\Pedido;

require 'Pedido.php';

class Factura {
	function tieneDescuento(Pedido $pedido): bool {
		$precioBase = $pedido->precioBase();
		return $precioBase > 1000;
	}
}

$factura = new Factura;
echo $factura->tieneDescuento(new Pedido) ? 'Tiene descuento' : 'No tiene descuento';
