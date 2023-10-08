<?php

namespace ReemplazarMetodoConMetodoDeObjeto;

trait MetodosPedido {
	public readonly float $precioBasePrimario;
	public readonly float $precioBaseSecundario;
	public readonly float $precioBaseTerciario;

	function __construct() {
		$this->precioBasePrimario = rand(1, 1000);
		$this->precioBaseSecundario = rand(1, 1000);
		$this->precioBaseTerciario = rand(1, 1000);
	}
}
