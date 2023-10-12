<?php

namespace ReemplazarParametroConLlamadaAMetodo;

require_once 'Matricula.php';

trait MetodosProductoEnCarrito {
	private int $cantidad;
	private int $precio;

	function __construct() {
		$this->cantidad = rand(1, 10);
		$this->precio = rand(1, 10);
	}

	private function obtenerDescuentoDeTemporada(): int {
		return rand(1, 10);
	}

	private function obtenerMatricula(): Matricula {
		return new Matricula(rand());
	}
}
