<?php

namespace ReemplazarCondicionalConPoliformismo;

trait MetodosPajaro {
	protected const EUROPEO = 1;
	protected const AFRICANO = 2;
	protected const NORUEGO = 3;

	protected int $tipo;
	protected int $voltaje;
	protected int $cantidadDeCocos;
	protected bool $estaEncerrado;

	function __construct() {
		$this->tipo = rand(self::EUROPEO, self::NORUEGO);
		$this->voltaje = rand(2, 24);
		$this->cantidadDeCocos = rand(1, 5);
		$this->estaEncerrado = (bool) rand(0, 1);
	}

	protected function obtenerVelocidadBase(int $voltaje = 0): float {
		return rand(1, 100) - $voltaje;
	}

	protected function obtenerFactorDeCarga(): int {
		return rand(1, 3);
	}
}
