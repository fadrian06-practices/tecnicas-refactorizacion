<?php

namespace ExtraerMetodo\Despues;

use ExtraerMetodo\MetodosFactura;

require 'MetodosFactura.php';

class Factura {
	use MetodosFactura;

	function imprimirDeuda(): void {
		$this->imprimirEncabezado();
		$this->imprimirDetalles($this->obtenerSaldoPendiente());
	}

	private function imprimirDetalles(float $deuda): void {
		echo "Nombre:   $this->nombre\n";
		echo "Cantidad: $deuda\n";
	}
}

$pedido = new Factura('Franyer');
$pedido->imprimirDeuda();
