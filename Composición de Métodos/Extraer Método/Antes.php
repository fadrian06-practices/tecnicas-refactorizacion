<?php

namespace ExtraerMetodo\Antes;

use ExtraerMetodo\MetodosFactura;

require 'MetodosFactura.php';

class Factura {
	use MetodosFactura;

	function imprimirDeuda(): void {
		$this->imprimirEncabezado();

		// Imprimir detalles
		echo "Nombre:   $this->nombre\n";
		echo "Cantidad: {$this->obtenerSaldoPendiente()}";
	}
}

$pedido = new Factura('Franyer');
$pedido->imprimirDeuda();
