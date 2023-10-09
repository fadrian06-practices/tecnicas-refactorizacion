<?php

namespace ReemplazarCondicionalConPoliformismo\Antes;

use ReemplazarCondicionalConPoliformismo\MetodosPajaro;

require 'MetodosPajaro.php';

class Pajaro {
	use MetodosPajaro;

	function obtenerVelocidad(): float {
		switch ($this->tipo) {
			case self::EUROPEO:
				return $this->obtenerVelocidadBase();
			case self::AFRICANO:
				return (
					$this->obtenerVelocidadBase()
					- ($this->obtenerFactorDeCarga() * $this->cantidadDeCocos)
				);
			case self::NORUEGO:
				return $this->estaEncerrado
					? 0
					: $this->obtenerVelocidadBase($this->voltaje);
			default:
				return .0;
		}
	}
}

$pajaro = new Pajaro;
echo "La velocidad del pajaro es: {$pajaro->obtenerVelocidad()}";
