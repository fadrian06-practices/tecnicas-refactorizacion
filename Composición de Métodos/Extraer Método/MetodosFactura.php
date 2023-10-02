<?php

namespace ExtraerMetodo;

trait MetodosFactura {
	function __construct(private string $nombre) {}

	private function imprimirEncabezado(): void {
		$encabezado = 'Deuda Total';
		$encabezado = str_pad($encabezado, strlen($encabezado) * 2, ' ', STR_PAD_BOTH);
		$asteriscos = str_pad('', strlen($encabezado), '*');

		echo "$asteriscos\n";
		echo "$encabezado\n";
		echo "$asteriscos\n";
	}

	private function obtenerSaldoPendiente(): float {
		return rand(11, 100) / 10;
	}
}
